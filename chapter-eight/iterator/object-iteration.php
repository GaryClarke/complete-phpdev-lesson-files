<?php

require './vendor/autoload.php';

class TraversableDemoClass implements Iterator
{
    private array $stocks = ['AMZN', 'MSFT', 'BABA', 'NFLX'];

    private int $index = 0;

    public function current()
    {
        print 'Current called' . PHP_EOL;

        return $this->stocks[$this->index];
    }

    public function next()
    {
        print 'Next called' . PHP_EOL;

        $this->index++;
    }

    public function key()
    {
        print 'Key called' . PHP_EOL;

        return $this->index;
    }

    public function valid()
    {
        print 'Valid called' . PHP_EOL;

        return isset($this->stocks[$this->index]); // false = break : true = continue
    }

    public function rewind()
    {
        print 'Rewind called' . PHP_EOL;

        $this->index = 0;
    }
}

$travDemo = new TraversableDemoClass();

function iterate_things(iterable $iterable)
{
    foreach ($iterable as $item => $value) {

        print "$item: $value" . PHP_EOL;
    }
}


iterate_things($travDemo);









