<?php

require_once 'FileReaderInterface.php';

class JsonFileReader implements FileReaderInterface
{
    public function readFileAsAssociativeArray(string $filename): array
    {
        // Get file content as a json string
        $contentString = file_get_contents($filename);

        // Decode into an associative array (items)
        $items = json_decode($contentString, true);

        // return items
        return $items;
    }
}

//$jsonReader = new JsonFileReader();
//$items = $jsonReader->readFileAsAssociativeArray('inventory.json');
//print_r($items);