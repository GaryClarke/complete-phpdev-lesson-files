<?php

require_once './vendor/autoload.php';

class Math
{
    public function __construct(public int $a, public int $b) {}

    public function sum()
    {
        return $this->a + $this->b;
    }
}

class Geometry extends Math
{
    public function __construct(int $a, int $b) {

        parent::__construct($a, $b);
    }

    public function sum()
    {
        return $this->a + $this->b;
    }
}

$math1 = new Math(1, 2);
$math2 = new Geometry(1, 2);

dd($math1 == $math2);













