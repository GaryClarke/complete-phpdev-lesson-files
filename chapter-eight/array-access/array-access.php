<?php

require './vendor/autoload.php';

class ArrayAccessDemoClass implements ArrayAccess
{
    private array $items = [];

    public function offsetExists($offset): bool
    {
        return isset($this->items[$offset]);
    }

    public function offsetGet($offset)
    {
        print 'Getting ' . $offset . PHP_EOL;

        return $this->items[$offset] ?? null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {

            $this->items[] = $value;

        } else {

            print 'Setting ' . $offset . PHP_EOL;

            $this->items[$offset] = $value;
        }
    }

    public function offsetUnset($offset): void
    {
        unset($this->items[$offset]);
    }
}


$demoObject = new ArrayAccessDemoClass();
$demoObject['item-one'] = 'Example item number one';
$demoObject['item-two'] = 'Example item number two';
$demoObject[] = 'A random item';

unset($demoObject['item-two']);
dd($demoObject['item-two']);










