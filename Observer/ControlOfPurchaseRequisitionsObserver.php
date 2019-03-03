<?php

namespace Observer;

class ControlOfPurchaseRequisitionsObserver implements Observer
{
    public function updated(string $id): void
    {
        $this->addPurchaseRequisitionList($id);
    }

    public function addPurchaseRequisitionList(string $productId): void
    {
        echo 'Produto adicionado à lista de requisições de compra';
    }
}