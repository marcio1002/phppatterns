<?php

namespace DesignPatterns\Structural\Decorator\Persona;

use DesignPatterns\Structural\Decorator\Contracts\Persona;


class Cavaleiro extends Persona
{
    public function __construct()
    {
        $this->name =  'Cavaleiro';
        $this->strike = 18;
    }
}