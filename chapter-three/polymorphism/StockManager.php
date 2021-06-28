<?php

require_once 'FileReaderInterface.php';

class StockManager
{
    public function updateStockFromFile(string $filename, FileReaderInterface $fileReader)
    {
        $stockItems = $fileReader->readFileAsAssociativeArray($filename);

        foreach ($stockItems as $stockItem) {

            print 'Updating the database with item: ' . $stockItem['name'] . '<br>';
        }
    }
}