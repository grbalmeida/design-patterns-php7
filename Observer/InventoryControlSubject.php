<?php

namespace Observer;

class InventoryControlSubject implements Subject
{
    private $observers;

    public function updateProductInventory(string $productId, int $newQuantity): bool
    {
        // Simula a atualização de estoque de um produto

        if ($newQuantity == 0) {
            $this->notifyObservers($productId);
        }
    }

    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $removeObserver): bool
    {
        foreach ($this->observers as $index => $observer) {
            if ($observer === $removeObserver) {
                unset($this->observers[$index]);
                return true;
            }
        }

        return false;
    }

    public function notifyObservers(string $productId): void
    {
        foreach ($this->observers as $observer) {
            $observer->updated($productId);
        }   
    }
}