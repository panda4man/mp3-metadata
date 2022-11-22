<?php

namespace App\Actions;

use App\Models\Mp3;
use Storage;

class SaveSourceMp3ToLocal extends BaseAction
{
    private Mp3 $mp3;
    private string $file_name;

    public function __construct(Mp3 $mp3, string $file_name)
    {
        $this->mp3       = $mp3;
        $this->file_name = $file_name;
    }

    public function call(): void
    {
        //do not have local. fetch from remote and save to local
        $dest_path = "imports/mp3/{$this->file_name}";
        $content   = Storage::disk($this->mp3->source_disk)->get($this->mp3->source_path);

        Storage::disk($this->mp3->dest_disk)->put($dest_path, $content);

        $this->mp3->dest_path = $dest_path;
        $this->mp3->save();
    }
}
