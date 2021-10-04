<?php
require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use 
   PHPpatterns\CreationPatterns\Builder\Factories\FactoryFoguete,
   PHPpatterns\CreationPatterns\Builder\Foguetes\FogueteModelo1,
   PHPpatterns\CreationPatterns\Builder\Foguetes\FogueteModelo2;


$fogueteModel1 = (new FactoryFoguete(new FogueteModelo1))
    ->createFoguete();
$fogueteModel2 =  (new FactoryFoguete(new FogueteModelo2))
    ->createFoguete();


echo $fogueteModel1;
echo PHP_EOL;
echo $fogueteModel2;
