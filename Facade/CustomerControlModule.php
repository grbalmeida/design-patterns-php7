<?php

namespace Facade;

class CustomerControlModule
{
    public function searchCustomer(string $customerCpf): array
    {
        // Simula a busca de um cliente pelo seu CPF.

        return [
            'name' => 'Gilvan Ribeiro',
            'phone' => '999999999',
            'email' => 'gilvan@email.com'
        ];
    }
}