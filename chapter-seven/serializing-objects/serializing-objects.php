<?php

require_once './vendor/autoload.php';

class Manager
{

    public function __construct(public string $name)
    {
    }
}

class Department implements Serializable
{

    public ?Manager $manager;

    public function __construct(public string $name)
    {
    }

    public function serialize()
    {
        return json_encode([
            'name'          => $this->name,
            'manager'       => $this->manager,
            'manager_class' => get_class($this->manager)
        ]);
    }

    public function unserialize($serialized)
    {
        $jsonDepartment = json_decode($serialized);

        $this->name = $jsonDepartment->name;
        $this->manager = new $jsonDepartment->manager_class($jsonDepartment->manager->name);
    }
}

$department1 = new Department('IT');
$department1->manager = new Manager('Bill Gates');
$department1String = serialize($department1);

$department2 = unserialize($department1String);
$department2->manager->name = 'Gary Clarke';
dd($department1, $department2);

















