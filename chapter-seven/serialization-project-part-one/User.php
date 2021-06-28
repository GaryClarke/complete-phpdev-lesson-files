<?php

namespace App\Entity;

class User
{
    public int $id;
    public string $name;

    public int $prod_server_access = 0;
    public int $dev_server_access = 0;
    public int $test_server_access = 0;

    public int $prod_data_access = 0;
    public int $dev_data_access = 0;
    public int $test_data_access = 0;
    public string $original_settings;


    public function hydrate(array $userData): void
    {
        foreach ($userData as $property => $value) {

            if (property_exists($this, $property)) {

                $this->$property = $value;
            }
        }
    }












}