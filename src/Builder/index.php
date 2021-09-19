<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use 
    PHPpatterns\Builder\Factories\FactoryFoguete,
    PHPpatterns\Builder\Foguetes\FogueteModelo1,
    PHPpatterns\Builder\Foguetes\FogueteModelo2;


$fogueteModel1 = (new FactoryFoguete(new FogueteModelo1))
    ->createFoguete();
$fogueteModel2 =  (new FactoryFoguete(new FogueteModelo2))
    ->createFoguete();


echo PHP_VERSION;
echo $fogueteModel1;
echo PHP_EOL;
echo $fogueteModel2;
