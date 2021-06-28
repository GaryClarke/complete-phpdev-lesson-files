<?php

abstract class DataModel
{
    protected string $tableName = 'random-table-name';

    public function save()
    {
        print_r('Saving data to table: ' . $this->tableName);
    }
}