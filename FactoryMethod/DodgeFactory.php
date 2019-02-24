<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    CarProduct, DodgeCharger, DodgeDart
};

class DodgeFactory implements CarFactory
{
    public function createCar(string $carModel): CarProduct
    {
        if ($carModel == 'charger') {
            return new DodgeCharger();
        } elseif ($carModel == 'dart') {
            return new DodgeDart();
        } else {
            throw new \Exception("Modelo de carro \"{$carModel}\" não existe no sistema");
        }
    }
}