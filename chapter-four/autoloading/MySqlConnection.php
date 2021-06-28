<?php

namespace App\Connection;

use Database\MySQL\Connection;

class MySqlConnection
{
    public function getDatabaseUrl(): string
    {
        $connection = new Connection();

        return $connection->getDatabaseUrl();
    }
}