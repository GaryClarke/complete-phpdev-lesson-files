<?php

require './vendor/autoload.php';

$cities = [
    [
        'name'       => 'Frankfurt',
        'country'    => 'Germany',
        'population' => 785000,
        'latitude'   => 50.110924,
        'longitude'  => 8.682127
    ],
    [
        'name'       => 'Mumbai',
        'country'    => 'India',
        'population' => 785000,
        'latitude'   => 19.076090,
        'longitude'  => 72.877426
    ],
    [
        'name'       => 'Valencia',
        'country'    => 'Spain',
        'population' => 834920,
        'latitude'   => 39.466667,
        'longitude'  => - 0.375000
    ]
];

class Collection extends ArrayObject
{
    public function __construct($array = array())
    {
        parent::__construct($array);
    }


    public function column($column)
    {
        return array_column($this->getArrayCopy(), $column);
    }


    public function zip($keys, $values)
    {
        return array_combine($this->column($keys), $this->column($values));
    }
}

$citiesCollection = new Collection($cities);

dd($citiesCollection->zip('name', 'population'));














