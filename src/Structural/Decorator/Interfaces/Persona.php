<?php

namespace DesignPatterns\Structural\Decorator\Interfaces;

abstract class Persona
{
    protected string $name;
    protected float $strike;

    private function isProp($prop): ?bool
    {
        if (!property_exists($this, $prop))
            throw new \Exception("Property $prop does not exist");

        return true;
    }

    public function __get($prop)
    {
       $this->isProp($prop);

        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->isProp($prop);

        $this->$prop = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStrike(): float
    {
        return $this->strike;
    }
}