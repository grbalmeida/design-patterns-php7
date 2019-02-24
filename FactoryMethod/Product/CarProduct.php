<?php

namespace FactoryMethod\Product;

interface CarProduct
{
    public function accelerate(): void;
    public function brake(): void;
    public function switchGear(): void;
}