<?php
require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use 
   DesignPatterns\Creation\Builder\Factories\FactoryFoguete,
   DesignPatterns\Creation\Builder\Foguetes\FogueteModelo1,
   DesignPatterns\Creation\Builder\Foguetes\FogueteModelo2,
   Helpers\Console;

$factoryFoguete1 = new FactoryFoguete(new FogueteModelo1);
$fogueteModel1 = $factoryFoguete1->createFoguete();

$factoryFoguete2 = new FactoryFoguete(new FogueteModelo2);
$fogueteModel2 = $factoryFoguete2->createFoguete();


Console::log($fogueteModel1);

Console::log($fogueteModel2);
