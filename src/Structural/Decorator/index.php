<?php

require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use 
    DesignPatterns\Structural\Decorator\Persona\Mago,
    DesignPatterns\Structural\Decorator\Persona\Archer,
    DesignPatterns\Structural\Decorator\Persona\Cavaleiro;

use
    DesignPatterns\Structural\Decorator\Equipment\RayBow,
    DesignPatterns\Structural\Decorator\Equipment\RingFire,
    DesignPatterns\Structural\Decorator\Equipment\SwordMagic;


$mago = new Mago();
$mago = new RingFire($mago);

$archer = new Archer();
$archer = new RayBow($archer);

$cavaleiro = new Cavaleiro();
$cavaleiro = new SwordMagic($cavaleiro);

echo "{$mago->getName()} = {$mago->getStrike()} Ataque\n";
echo "{$archer->getName()} = {$archer->getStrike()} Ataque\n";
echo "{$cavaleiro->getName()} = {$cavaleiro->getStrike()} Ataque\n";