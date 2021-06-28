<?php

class Basket 
{    
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal() {
        
        $subTotal = $this->itemsTotal + $this->shippingCost - $this->discount;

        return $subTotal;
    }
}

$basket = new Basket();

$basket->itemsTotal = 50;
$basket->shippingCost = 10;
$basket->discount = 30;

$subTotal = $basket->calculateSubTotal(); 

// Dump and check that the browser displays the correct sub total
var_dump($subTotal);









