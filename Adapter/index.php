<?php

require_once('../autoloader.php');

$legacyIntegration = new \Adapter\ErpIntegration();
$erpIntegrationAdapter = new \Adapter\ErpIntegrationAdapter($legacyIntegration);
$token = $erpIntegrationAdapter->generateToken('123456', 'GILVAN_RIBEIRO');

$testOrder = new \Adapter\Order();
$testOrder->setTotalPrice(3509.50)
    ->setOrderNumber(123456)
    ->addProduct('Iphone X')
    ->addProduct('Carregador Sem Fio - IPhone X');

$orderSentSuccessfully = $erpIntegrationAdapter->sendOrder($testOrder, $token);

if ($orderSentSuccessfully) {
    echo 'Pedido enviado com sucesso';
}