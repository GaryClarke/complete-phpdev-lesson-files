<?php

require_once './vendor/autoload.php';

class Manager
{
    public function __construct(public int $id, public string $name) {}
}

class Department
{
    public ?Manager $manager;

    public function __construct(public string $name) {}

    public function __clone(): void
    {
        if (isset($this->manager)) {

            $this->manager = clone $this->manager;
        }
    }
}

// Referencing the same object
$department1 = new Department('IT');
$department1->manager = new Manager(id: 1, name: 'Alan Turing');

// Cloning (shallow copy)
$department2 = clone $department1;
$department2->name = 'Sales';
$department2->manager->id = 2;
$department2->manager->name = 'Jack Ma';

dd($department1, $department2);












