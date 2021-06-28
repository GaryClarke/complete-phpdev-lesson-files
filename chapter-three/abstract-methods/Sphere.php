<?php

require_once 'NonCuboidShape.php';

class Sphere extends NonCuboidShape
{
    /**
     * Calculate the volume of a Sphere V=4/3πr3
     * @return float
     */
    public function volume(): float
    {
        return 4 / 3 * pi() * pow($this->dimensions['radius'], 3);
    }
}