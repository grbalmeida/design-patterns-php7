<?php

namespace Builder;

class RocketModelIIBuilder extends RocketBuilder
{
    public function buildFuelTank()
    {
        $this->rocket->setFuelTank(850);
    }

    public function buildModel()
    {
        $this->rocket->setModel('Foguete Modelo II');
    }

    public function buildEngines()
    {
        $this->rocket->setNumberOfEngines(2);
    }

    public function buildNumberOfSeats()
    {
        $this->rocket->setNumberOfSeats(6);
    }
}