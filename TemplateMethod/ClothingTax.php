<?php

namespace TemplateMethod;

class ClothingTax extends AbstractTax
{
    protected function calculateVariableTax(float $productPrice): float
    {
        return ($productPrice * 1.15);
    }
}