<?php

namespace Facade;

class InventoryControlModule
{
    public function recordWithdrawal(string $bookId, int $customerCpf): bool
    {
        // Efetua o registro de retirada do livro.
        return true;
    }

    public function validateInventory(string $bookId): bool
    {
        // ... Valida se possui estoque
        echo 'Registro de retirada efetuado com sucesso.<br/>';
        return true;
    }
}