<?php

namespace App\Model;

class ReviewRepository extends ModelRepository
{

    public function findForProduct(int $productId): array
    {
        $stmt = $this->getPdo()->prepare('SELECT * FROM review WHERE product_id = :product_id');
        $stmt->execute(['product_id' => $productId]);

        $reviews = $stmt->fetchAll(\PDO::FETCH_CLASS, Review::class);

        if (!$reviews) {
            return [];
        }

        return $reviews;
    }
}