<?php

namespace App\Helpers;

class FormatBytes 
{
    public static function formatBytes($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];

        for($i = 0; $bytes > 1024; $i++)
        {
            $bytes /= 1024;
        }

        return round($bytes, 2).' '.$units[$i];
    }
}