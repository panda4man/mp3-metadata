<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/mp3', function () {
    $parts       = parse_url(request()->get('file'));
    $remote_path = substr($parts['path'], 1);
    $file_name   = collect(explode("/", $remote_path))->last();
    $path        = "imports/mp3/$file_name";

    if (!Storage::exists($path)) {
        $file = Storage::disk('s3')->get($remote_path);
        $save = Storage::disk()->put($path, $file);
    }

    $path = Storage::path($path);

    $audio = new wapmorgan\Mp3Info\Mp3Info($path);

    return $audio->duration;
});
