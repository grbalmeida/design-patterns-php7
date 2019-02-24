<?php

namespace FactoryMethod\Product;

class TeslaModelX implements CarProduct
{
    public function accelerate(): void
    {
        echo 'Acelerando Tesla Modelo X<br/>';
    }

    public function brake(): void
    {
        echo 'Freando Tesla Modelo X<br/>';
    }

    public function switchGear(): void
    {
        echo 'Trocando marcha do Tesla Modelo X<br/>';
    }
}