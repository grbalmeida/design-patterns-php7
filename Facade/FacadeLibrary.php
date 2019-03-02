<?php

namespace Facade;

use Facade\{
    InventoryControlModule, CustomerControlModule, EmailModule, ApiSmsModule
};

class FacadeLibrary
{
    public function effectWithdrawal(string $bookId, string $customerCpf): bool
    {
        $inventoryControlModule = new InventoryControlModule();

        if (!$inventoryControlModule->validateInventory($bookId)) {
            throw new \Exception('Estoque indisponível');
        }

        return $inventoryControlModule->recordWithdrawal($bookId, $customerCpf);
    }

    public function messageTrigger(
        string $bookId,
        string $customerCpf,
        string $apiKey,
        string $apiPass
    ): bool
    {
        $smsModule = new ApiSmsModule();
        $customerControlModule = new CustomerControlModule();
        $emailModule = new EmailModule();
        $customer = $customerControlModule->searchCustomer($customerCpf);

        if ($emailModule->validateMailServer()) {
            $emailModule->sendMessage(
                'Biblioteca de Teste',
                $customer['name'],
                $customer['email'],
                "Aluguel de livro de código '{$bookId}' efetuado com sucesso!"
            );
        }

        $token = $smsModule->generateApiToken($apiKey, $apiPass);

        $smsModule->sendSms(
            $token,
            'Biblioteca de Teste',
            $customer['name'],
            $customer['phone'],
            "Aluguel de livro de código '{$bookId}' efetuado com sucesso!"
        );

        return true;
    }
}