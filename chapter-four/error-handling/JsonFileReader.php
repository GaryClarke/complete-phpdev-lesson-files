<?php

namespace App\Utility;

use App\Exceptions\BadJsonException;
use App\Exceptions\FileNotFoundException;

class JsonFileReader
{

    public function readFileAsAssociativeArray(string $filename): array
    {
        if (!file_exists($filename)) {

            throw new FileNotFoundException('The file: ' . $filename . ' could not be found');
        }

        // Get file content as a json string
        $content = file_get_contents($filename);

        // Decode into an associative array (items)
        $items = json_decode($content, true);

        if (!isset($items)) {

            throw new BadJsonException('The content of ' . $filename . ' could not be decoded into json');
        }

        return $items;
    }
}