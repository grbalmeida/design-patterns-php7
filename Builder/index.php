<?php

require_once('../autoloader.php');

$rocketMakerTestI = new Builder\RocketFactoryDirector(new Builder\RocketModelIBuilder());
$rocketMakerTestII = new Builder\RocketFactoryDirector(new Builder\RocketModelIIBuilder());

$rocketMakerTestI->buildRocket();
echo $rocketMakerTestI->getRocket();
echo '<br/>';

$rocketMakerTestII->buildRocket();
echo $rocketMakerTestII->getRocket();