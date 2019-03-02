<?php

namespace Facade;

class ApiSmsModule
{
    public function generateApiToken(string $apiKey, string $apiPass): string
    {
        // Simula a geração de um token através da API de envio de SMS.
        return 'TOKEN_RETORNADO_API';
    }

    public function sendSms(
        string $apiToken,
        string $senderName,
        string $recipientName,
        string $recipientPhone,
        string $message
    ): bool
    {
        // Simula envio de mensagem SMS via API.
        echo 'SMS enviado com sucesso.<br/>';
        return true;
    }
}