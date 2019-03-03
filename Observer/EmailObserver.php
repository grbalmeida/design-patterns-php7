<?php

namespace Observer;

class EmailObserver implements Observer
{
    public function updated(string $id): void
    {
        $this->sendEmailEmptyInventory($id);
    }

    public function sendEmailEmptyInventory(string $productId): void
    {
        echo 'E-mail enviado para o setor de compras';
    }
}