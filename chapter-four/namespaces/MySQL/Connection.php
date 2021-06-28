<?php

namespace Database\MySQL;

class Connection
{
    private string $databaseUrl = 'mysql://root:secret@127.0.0.1:3306/my_db?serverVersion=8.0';

    public function getDatabaseUrl(): string
    {
        return $this->databaseUrl;
    }
}