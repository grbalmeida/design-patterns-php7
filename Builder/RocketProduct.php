<?php

namespace Builder;

class RocketProduct
{
    protected $fuelTank;
    protected $model;
    protected $numberOfEngines;
    protected $numberOfSeats;

    public function __toString(): string
    {
        $result = "Foguete model: {$this->getModel()}<br/>";
        $result .= "Litros do tanque: {$this->getFuelTank()}<br/>";
        $result .= "Número de motores: {$this->getNumberOfEngines()}<br/>";
        $result .= "Número de lugares: {$this->getNumberOfSeats()}<br/>";
        return $result;
    }

    public function getFuelTank(): float
    {
        return $this->fuelTank;
    }

    public function setFuelTank(float $fuelTank): RocketProduct
    {
        $this->fuelTank = $fuelTank;
        return $this;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): RocketProduct
    {
        $this->model = $model;
        return $this;
    }

    public function getNumberOfEngines(): int
    {
        return $this->numberOfEngines;
    }

    public function setNumberOfEngines(int $numberOfEngines): RocketProduct
    {
        $this->numberOfEngines = $numberOfEngines;
        return $this;
    }

    public function getNumberOfSeats(): int
    {
        return $this->numberOfSeats;
    }

    public function setNumberOfSeats(int $numberOfSeats): RocketProduct
    {
        $this->numberOfSeats = $numberOfSeats;
        return $this;
    }
}