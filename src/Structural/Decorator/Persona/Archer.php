<?php

namespace DesignPatterns\Structural\Decorator\Persona;

use DesignPatterns\Structural\Decorator\Contracts\Persona;


class Archer extends Persona
{
    public function __construct()
    {
        $this->name =  'Archer';
        $this->strike = 12;
    }
}