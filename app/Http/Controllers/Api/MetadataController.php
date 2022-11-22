<?php

namespace App\Http\Controllers\Api;

use App\Actions\SaveSourceMp3ToLocal;
use App\Http\Controllers\Controller;
use App\Models\Mp3;
use App\Support\RemoteUrlHelper;
use Illuminate\Http\Request;
use Storage;
use wapmorgan\Mp3Info\Mp3Info;

class MetadataController extends Controller
{
    public function __invoke()
    {
        //assuming the s3 disk for now
        $remote_url  = request()->get('url');
        $refresh     = request()->get('refresh');
        $remote_path = RemoteUrlHelper::getPath($remote_url);
        $mp3_record  = Mp3::where('source_path', $remote_path)->first();
        $file_name   = RemoteUrlHelper::getFileNameFromPath($remote_path);

        if (!$mp3_record) {
            $mp3_record = Mp3::newDefault(['source_path' => $remote_path]);
            $mp3_record->save();
        }

        // check if we have a duration already
        if (!$mp3_record->duration || in_array($refresh, ['1', 1, true, 'true'])) {
            $dest_path = $mp3_record->dest_path;

            //no duration, see if we can access the source file and save to local
            if (!$dest_path || !Storage::disk($mp3_record->dest_disk)->fileExists($dest_path)) {
                SaveSourceMp3ToLocal::make($mp3_record, $file_name)->call();
            }

            $meta                 = new Mp3Info(Storage::path($mp3_record->dest_path));
            $mp3_record->duration = round($meta->duration, 4);
            $mp3_record->save();
        }

        return response()->json([
            'data' => [
                'duration' => $mp3_record->duration
            ]
        ]);
    }
}
