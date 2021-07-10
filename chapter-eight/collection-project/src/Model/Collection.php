<?php

namespace App\Model;

use ArrayIterator;
use Exception;
use Traversable;

class Collection implements \ArrayAccess, \IteratorAggregate, \Countable
{
    private array $elements;

    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->elements);
    }

    public function offsetExists($offset): bool
    {
        return isset($this->elements[$offset]) || array_key_exists($offset, $this->elements);
    }

    public function offsetGet($offset)
    {
        return $this->elements[$offset] ?? null;
    }

    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->elements[] = $value;

            return;
        }

        $this->elements[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        if (!isset($this->elements[$offset]) && !array_key_exists($offset, $this->elements)) {
            return null;
        }

        $removed = $this->elements[$offset];
        unset($this->elements[$offset]);

        return $removed;
    }

    public function count()
    {
        return count($this->elements);
    }

    public function isEmpty(): bool
    {
        return empty($this->elements);
    }

    public function filter(callable $fn): Collection
    {
        return $this->createFrom(array_filter($this->elements, $fn, ARRAY_FILTER_USE_BOTH));
    }

    public function createFrom(array $array)
    {
        return new static($array);
    }

    public function column(string $column): Collection
    {
        return $this->createFrom(array_column($this->elements, $column));
    }

    public function countValues(): Collection
    {
        return $this->createFrom(array_count_values($this->elements));
    }

    public function toArray(): array
    {
        return $this->elements;
    }

    public function krsort(): Collection
    {
        krsort($this->elements);

        return $this; // fluent interface
    }
}










