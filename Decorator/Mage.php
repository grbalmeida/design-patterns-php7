<?php

namespace Decorator;

class Mage extends Character
{
    public function __construct()
    {
        $this->name = 'Mago';
        $this->attack = 10;
    }
}