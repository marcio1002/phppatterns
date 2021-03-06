<?php
namespace DesignPatterns\Structural\Decorator\Contracts;

use DesignPatterns\Structural\Decorator\Contracts\Persona;

abstract class Equipment extends Persona {

    protected Persona $persona;

    public function __construct(Persona $persona)
    {
        $this->persona = $persona;
    }

    public function getName(): string
    {
        return $this->persona->getName();
    }

    public function getStrike(): float
    {
        return $this->persona->getStrike() + $this->strike;
    }

}