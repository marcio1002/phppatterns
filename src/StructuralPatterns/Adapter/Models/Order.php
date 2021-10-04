<?php

namespace PHPpatterns\StructuralPatterns\Adapter\Models;

class Order {
    private string $numberOrder;
    private float $totalProducts;

    private array $products;

    public function addProduct(string $product): self
    {
        $this->products[] = $product;

        $this->totalProducts = count($this->products);
        return $this;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setNumberOrder(string $numberOrder): self
    {
        $this->numberOrder = $numberOrder;

        return $this;
    }

    public function getNumberOrder(): string
    {
        return $this->numberOrder;
    }

    public function getTotalProducts(): float
    {
        return $this->totalProducts;
    }
}