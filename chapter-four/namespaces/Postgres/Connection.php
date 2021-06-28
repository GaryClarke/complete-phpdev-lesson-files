<?php

namespace Database\PostgreSQL;

class Connection
{
    private string $databaseUrl = 'postgresql://127.0.0.1:5432/my_db?serverVersion=13&charset=utf8';

    public function getDatabaseUrl(): string
    {
        return $this->databaseUrl;
    }
}