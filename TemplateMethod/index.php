<?php

require_once('../autoloader.php');

$foodTax = new \TemplateMethod\FoodTax();
$clothingTax = new \TemplateMethod\ClothingTax();
$electronicTax = new \TemplateMethod\ElectronicTax();

echo 'Preço final de alimentação: '.$foodTax->calculateProductTaxes(10);
echo '<br/>';

echo 'Preço final de vestuário: '.$clothingTax->calculateProductTaxes(10);
echo '<br/>';

echo 'Preço final de eletrônicos: '.$electronicTax->calculateProductTaxes(10);
echo '<br/>';