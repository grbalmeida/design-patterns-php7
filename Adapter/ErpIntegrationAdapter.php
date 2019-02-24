<?php

namespace Adapter;

class ErpIntegrationAdapter implements IErpAdapter
{
    private $erpIntegration;

    public function __construct(ErpIntegration $erpIntegration)
    {
        $this->erpIntegration = $erpIntegration;
    }

    public function generateToken(string $apiKey, string $user): string
    {
        return $this->erpIntegration->token($apiKey);
    }

    public function sendOrder(Order $order, string $token): bool
    {
        $orderConvertedToArray = [
            'total_price' => $order->getTotalPrice(),
            'id' => $order->getOrderNumber()
        ];

        foreach ($order->getProducts() as $product) {
            $orderConvertedToArray['products'][] = $product;
        }

        return $this->erpIntegration->order($orderConvertedToArray, $token);
    }
}