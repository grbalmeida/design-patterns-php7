<?php

require_once('../autoloader.php');

$teslaFactory = new \FactoryMethod\TeslaFactory;
$dodgeFactory = new \FactoryMethod\DodgeFactory;

try {
    $teslaModelS = $teslaFactory->createCar('model_s');
    $teslaModelX = $teslaFactory->createCar('model_x');
    $dodgeCharger = $dodgeFactory->createCar('charger');
    $dodgeDart = $dodgeFactory->createCar('dart');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $teslaModelS->accelerate();
echo $teslaModelS->brake();
echo $teslaModelS->switchGear();
echo '<br/>';

echo $teslaModelX->accelerate();
echo $teslaModelX->brake();
echo $teslaModelX->switchGear();
echo '<br/>';

echo $dodgeCharger->accelerate();
echo $dodgeCharger->brake();
echo $dodgeCharger->switchGear();
echo '<br/>';

echo $dodgeDart->accelerate();
echo $dodgeDart->brake();
echo $dodgeDart->switchGear();
echo '<br/>';