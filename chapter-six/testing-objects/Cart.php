<?php

namespace App;

class Cart
{
    public float $price;
    public static float $tax = 1.2;

    public function getNetPrice(): float
    {
        return $this->price * self::$tax;
    }


    public function addToPrice(int $amount)
    {
        $this->price += $amount;
    }
}