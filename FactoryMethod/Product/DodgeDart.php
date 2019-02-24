<?php

namespace FactoryMethod\Product;

class DodgeDart implements CarProduct
{
    public function accelerate(): void
    {
        echo 'Acelerando Dodge Dart<br/>';
    }

    public function brake(): void
    {
        echo 'Freando Dodge Dart<br/>';
    }

    public function switchGear(): void
    {
        echo 'Trocando marcha do Dodge Dart<br/>';
    }
}