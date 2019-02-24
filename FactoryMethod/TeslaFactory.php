<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    CarProduct, TeslaModelS, TeslaModelX
};

class TeslaFactory implements CarFactory
{
    public function createCar(string $carModel): CarProduct
    {
        if ($carModel == 'model_x') {
            return new TeslaModelX();
        } elseif ($carModel == 'model_s') {
            return new TeslaModelS();
        } else {
            throw new \Exception("Modelo do carro \"{$carModel}\" não existe no sistema.");
        }
    }
}