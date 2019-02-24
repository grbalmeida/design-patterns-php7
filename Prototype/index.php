<?php

require_once('../autoloader.php');

$buyers = [
    'Gilvan Ribeiro',
    'Gabriel Anhaia',
    'Anderson Scherer',
    'Braian Ottoni'
];

$phpBook = new \Prototype\PhpBookPrototype();
$phpBook->setTitle('Padrões de Projeto em PHP 7.2');

$books = [];

foreach ($buyers as $buyerName) {
    $bookBuyer = clone $phpBook;
    $bookBuyer->setHolderName($buyerName);
    $books[] = $bookBuyer;
}

echo '<pre>';
print_r($books);