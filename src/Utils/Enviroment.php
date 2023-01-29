<?php

namespace Source\Utils;

abstract class Enviroment
{

    public static function addEnv()
    {
        $path = __DIR__ . '/../../.env';
        $fileEnv = file_exists($path) ? file($path) : false;
        if (!$fileEnv) {
            return false;
        }
        foreach ($fileEnv as $line) {
            putenv(trim($line));
        }
    }
}
