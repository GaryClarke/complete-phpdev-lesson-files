<?php

namespace App;

class Inventory
{
    private array $products;

    public function __construct(private ProductRepository $productsRepo)
    {
    }

    public function setProducts()
    {
        $this->products = $this->productsRepo->fetchProducts();
    }


    public function getProducts(): array
    {
        return $this->products;
    }
}