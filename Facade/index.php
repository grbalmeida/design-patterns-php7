<?php

require_once('../autoloader.php');

$facadeLibrary = new \Facade\FacadeLibrary();

$bookId = '123456';
$customerCpf = '12345678998';

$madeWithdrawal = $facadeLibrary->effectWithdrawal($bookId, $customerCpf);

if ($madeWithdrawal) {
    $facadeLibrary->messageTrigger($bookId, $customerCpf, 'CHAVE_API', 'SENHA_API');
}