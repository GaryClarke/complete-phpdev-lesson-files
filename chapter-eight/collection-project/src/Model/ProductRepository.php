<?php

namespace App\Model;

class ProductRepository extends ModelRepository
{

    public function findById(int $id): ?Product
    {
        $stmt = $this->getPdo()->prepare('SELECT * FROM product WHERE id = :id');
        $stmt->execute(['id' => $id]);

        $products = $stmt->fetchAll(\PDO::FETCH_CLASS, Product::class);

        if (!$products) {
            return null;
        }

        return $products[0];
    }
}