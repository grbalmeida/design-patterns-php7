<?php

namespace Observer;

interface Observer
{
    public function updated(string $id): void;
}