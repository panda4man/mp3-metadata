<?php

namespace App\Support;

class RemoteUrlHelper
{
    public static function getPath(string $url): string
    {
        $parts = parse_url($url);
        return substr($parts['path'], 1);
    }

    public static function getFileNameFromPath(string $path): string
    {
        return collect(explode('/', $path))->last();
    }
}
