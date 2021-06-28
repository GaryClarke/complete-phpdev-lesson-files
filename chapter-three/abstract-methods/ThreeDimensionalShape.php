<?php

abstract class ThreeDimensionalShape
{
    protected array $dimensions;

    public function __construct(array $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    abstract public function volume(): float;
}