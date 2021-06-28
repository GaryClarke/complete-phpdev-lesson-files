<?php

require './vendor/autoload.php';

class IterAggDemo implements IteratorAggregate
{
    public function __construct(private array $items) {}

    public function getIterator()
    {
        print 'getIterator called' . PHP_EOL;

        return new ArrayIterator($this->items);
    }
}

$mappedArray = [
    'name'     => 'Gary',
    'location' => 'Manchester, UK',
    'role'     => 'Software Developer'
];

$iterAggDemo = new IterAggDemo($mappedArray);

$iterator = $iterAggDemo->getIterator();

$iterator->offsetSet('id', 1234);












