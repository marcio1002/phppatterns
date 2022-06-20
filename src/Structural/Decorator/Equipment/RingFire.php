<?php
namespace DesignPatterns\Structural\Decorator\Equipment;

use 
    DesignPatterns\Structural\Decorator\Contracts\Equipment,
    DesignPatterns\Structural\Decorator\Contracts\Persona;

class RingFire extends Equipment
{

    protected float $strike;

    public function __construct(Persona $persona)
    {
        parent::__construct($persona);
        $this->strike = 12.5;
    }
}
