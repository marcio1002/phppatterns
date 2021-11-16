<?php

namespace DesignPatterns\Structural\Decorator\Persona;

use DesignPatterns\Structural\Decorator\Interfaces\Persona;


class Mago extends Persona
{
    public function __construct()
    {
        $this->name =  'Mago';
        $this->strike = 10;
    }
}