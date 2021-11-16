<?php
namespace DesignPatterns\Structural\Decorator\Equipment;

use 
    DesignPatterns\Structural\Decorator\Interfaces\Equipment,
    DesignPatterns\Structural\Decorator\Interfaces\Persona;

class RingFire extends Equipment
{

    protected float $strike;

    public function __construct(Persona $persona)
    {
        parent::__construct($persona);
        $this->strike = 12.5;
    }
}
