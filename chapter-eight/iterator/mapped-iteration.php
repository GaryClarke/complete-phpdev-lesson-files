<?php

require './vendor/autoload.php';

class MappedIteratorDemo implements Iterator, Countable
{
    public function __construct(private array $items = []) {}

    public function current()
    {
        return current($this->items);
    }

    public function next()
    {
        return next($this->items);
    }

    public function key()
    {
        return key($this->items);
    }

    public function valid()
    {
        return key($this->items) !== null;
    }

    public function rewind()
    {
        return reset($this->items);
    }

    public function count()
    {
        return count($this->items);
    }
}

$mappedArray = [
    'Gary',
    'Manchester, UK',
    'Software Developer'
];

$mappedIterDemo = new MappedIteratorDemo($mappedArray);

foreach ($mappedIterDemo as $item => $value) {

    print "$item: $value" . PHP_EOL;
}








