<?php

namespace Facade;

class EmailModule
{
    public function validateMailServer(): bool
    {
        // Valida se o servidor de emails está funcionando.
        return true;
    }

    public function sendMessage(
        string $senderName,
        string $recipientName,
        string $recipientEmailAddress,
        string $message
    ): bool
    {
        // Simula envio de mensagem de email.
        echo 'Email enviado com sucesso.<br/>';
        return true;   
    }
}