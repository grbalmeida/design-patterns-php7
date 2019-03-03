<?php

require_once('../autoloader.php');

$decorator = new \Decorator\Mage();
$decorator = new \Decorator\FireRing($decorator);
$decorator = new \Decorator\FireRing($decorator);
$decorator = new \Decorator\ForceNecklace($decorator);
$decorator = new \Decorator\MagicSword($decorator);

echo $decorator->getName();
echo '<br/>';

echo "Ataque = {$decorator->getAttack()}";
echo '<br/>';