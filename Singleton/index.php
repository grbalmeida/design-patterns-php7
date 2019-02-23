<?php

require_once '../autoloader.php';

use Singleton\SingletonLogs;

$instance = SingletonLogs::getInstance();
$newInstance = SingletonLogs::getInstance();

$instance->recordLogs(['Entrou no sistema']);
$newInstance->recordLogs(['Saiu do sistema']);
$instance->recordLogs(['Clicou em um botão']);

if ($instance === $newInstance) {
    echo 'As instâncias são exatamentes as mesmas!';
}