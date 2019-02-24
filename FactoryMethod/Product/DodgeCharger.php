<?php

namespace FactoryMethod\Product;

class DodgeCharger implements CarProduct
{
    public function accelerate(): void
    {
        echo 'Acelerando Dodge Charger<br/>';
    }

    public function brake(): void
    {
        echo 'Freando Dodge Charger<br/>';
    }

    public function switchGear(): void
    {
        echo 'Trocando marcha do Dodge Charger<br/>';
    }
}