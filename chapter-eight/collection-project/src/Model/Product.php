<?php

namespace App\Model;

class Product
{
    private int $id;

    private string $name;

    private int $price;

    private string $description;

    private string $image_name;

    private Collection $reviews;

    public function __construct()
    {
        $this->reviews = new Collection();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDisplayPrice(): string
    {
        return number_format($this->price / 100, 2);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getImageName(): string
    {
        return $this->image_name;
    }

    /**
     * @return iterable
     */
    public function getReviews(): iterable
    {
        if ($this->reviews->isEmpty()) {

            // Need a ReviewRepository
            $reviewRepository = new ReviewRepository();

            $reviewsArray = $reviewRepository->findForProduct($this->id);

            $this->reviews = new Collection($reviewsArray);
        }

        return $this->reviews;
    }
}