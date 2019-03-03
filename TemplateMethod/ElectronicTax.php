<?php

namespace TemplateMethod;

class ElectronicTax extends AbstractTax
{
    protected function calculateVariableTax(float $productPrice): float
    {
        $productPrice = ($productPrice * 1.2);
        return $productPrice;
    }

    protected function calculateAdditionalTax(float $productPrice): float
    {
        return $productPrice - ($productPrice * 0.1);
    }
}