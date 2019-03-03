<?php

namespace Observer;

interface Subject
{
    public function addObserver(Observer $observer): void;
    public function removeObserver(Observer $observer): bool;
    public function notifyObservers(string $productId): void;
}