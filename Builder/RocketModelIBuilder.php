<?php

namespace Builder;

class RocketModelIBuilder extends RocketBuilder
{
    public function buildFuelTank()
    {
        $this->rocket->setFuelTank(1000);
    }

    public function buildModel()
    {
        $this->rocket->setModel('Foguete Modelo II');
    }

    public function buildEngines()
    {
        $this->rocket->setNumberOfEngines(3);
    }

    public function buildNumberOfSeats()
    {
        $this->rocket->setNumberOfSeats(8);
    }
}