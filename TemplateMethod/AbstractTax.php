<?php

namespace TemplateMethod;

abstract class AbstractTax
{
    private function calculateFirstFlatTax(float $productPrice): float
    {
        return ($productPrice * 1.3);
    }

    private function calculateSecondFlatTax(float $productPrice): float
    {
        return ($productPrice * 1.1);
    }

    abstract protected function calculateVariableTax(float $productPrice): float;

    public function calculateProductTaxes(float $productPrice): float
    {
        $productPrice = $this->calculateFirstFlatTax($productPrice);
        $productPrice = $this->calculateSecondFlatTax($productPrice);
        $productPrice = $this->calculateAdditionalTax($productPrice);
        $productPrice = $this->calculateVariableTax($productPrice);

        return $productPrice;
    }

    protected function calculateAdditionalTax(float $productPrice): float
    {
        return $productPrice;
    }
}