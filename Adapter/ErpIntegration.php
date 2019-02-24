<?php

namespace Adapter;

class ErpIntegration
{
    public function token($apiKey)
    {
        // Código de solicitação do token aqui
        return 'TOKEN_GERADO_VIA_API';
    }

    public function order($order, $apiKey)
    {
        // Código de envio do pedido aqui
        return true;
    }
}