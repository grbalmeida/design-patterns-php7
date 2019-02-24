<?php

namespace Adapter;

class Order
{
    protected $orderNumber;
    protected $totalPrice;
    protected $products;

    public function addProduct(string $product): Order
    {
        $this->products[] = $product;
        return $this;
    }

    public function getOrderNumber(): int
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(int $orderNumber): Order
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $totalPrice): Order
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function getProducts(): array
    {
        return $this->products;;
    }
}