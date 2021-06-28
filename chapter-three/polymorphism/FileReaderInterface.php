<?php

interface FileReaderInterface
{
    public function readFileAsAssociativeArray(string $filename): array;
}