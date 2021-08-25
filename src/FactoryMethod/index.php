<?php

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use 
  PHPpatterns\FactoryMethod\Factory\DodgeFactory,
  PHPpatterns\FactoryMethod\Factory\TeslaFactory;

$dodgeFactory = new DodgeFactory();
$teslaFactory = new TeslaFactory();

$charger = $dodgeFactory->createCar(DodgeFactory::CHARGER);
$dart = $dodgeFactory->createCar(DodgeFactory::DART);

$charger->accelerate();
$charger->shiftMacha();
$charger->brake();
echo PHP_EOL;
$dart->accelerate();
$dart->shiftMacha();
$dart->brake();

echo PHP_EOL;
echo PHP_EOL;

$teslaX  = $teslaFactory->createCar(TeslaFactory::TESLA_X);
$teslaS = $teslaFactory->createCar(TeslaFactory::TESLA_S);

$teslaX->accelerate();
$teslaX->shiftMacha();
$teslaX->brake();
echo PHP_EOL;
$teslaS->accelerate();
$teslaS->shiftMacha();
$teslaS->brake();