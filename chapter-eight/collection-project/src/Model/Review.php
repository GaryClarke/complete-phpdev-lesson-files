<?php

namespace App\Model;

class Review
{
    private int $id;

    private int $rating;

    private ?string $body;

    private string $publication_date;

    private Product $product;

    public function __get(string $name)
    {
        return $this->$name;
    }

    public function __isset(string $name): bool
    {
        return isset($this->$name);
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    public function getPublicationDate(): \DateTimeInterface
    {
        return new \DateTimeImmutable($this->publication_date);
    }
}