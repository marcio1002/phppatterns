<?php

require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use 
    DesignPatterns\Structural\Decorator\Persona\Mago,
    DesignPatterns\Structural\Decorator\Persona\Archer,
    DesignPatterns\Structural\Decorator\Persona\Cavaleiro;

use
    DesignPatterns\Structural\Decorator\Equipment\RayBow,
    DesignPatterns\Structural\Decorator\Equipment\RingFire,
    DesignPatterns\Structural\Decorator\Equipment\SwordMagic,
    Helpers\Console;


$mago = new Mago();
$mago = new RingFire($mago);

$archer = new Archer();
$archer = new RayBow($archer);

$cavaleiro = new Cavaleiro();
$cavaleiro = new SwordMagic($cavaleiro);

Console::log("{$mago->getName()} = {$mago->getStrike()} Ataque\n", Console::FG_GREEN, Console::BOLD);
Console::log("{$archer->getName()} = {$archer->getStrike()} Ataque\n", Console::FG_GREEN, Console::BOLD);
Console::log("{$cavaleiro->getName()} = {$cavaleiro->getStrike()} Ataque\n", Console::FG_GREEN, Console::BOLD);