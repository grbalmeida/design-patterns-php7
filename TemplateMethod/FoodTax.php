<?php

namespace TemplateMethod;

class FoodTax extends AbstractTax
{
    protected function calculateVariableTax(float $productPrice): float
    {
        return $productPrice;
    }
}