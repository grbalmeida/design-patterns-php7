<?php

namespace FactoryMethod\Product;

class TeslaModelS implements CarProduct
{
    public function accelerate(): void
    {
        echo 'Acelerando Tesla Modelo S<br/>';
    }

    public function brake(): void
    {
        echo 'Freando Tesla Modelo S<br/>';
    }

    public function switchGear(): void
    {
        echo 'Trocando marcha do Tesla Modelo S<br/>';
    }
}