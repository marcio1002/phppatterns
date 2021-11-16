<?php
namespace DesignPatterns\Structural\Decorator\Equipment;

use 
    DesignPatterns\Structural\Decorator\Interfaces\Equipment,
    DesignPatterns\Structural\Decorator\Interfaces\Persona;

class SwordMagic extends Equipment
{

    protected float $stack;

    public function __construct(Persona $persona)
    {
        parent::__construct($persona);
        $this->strike = 28.8;
    }
}
