<?php

namespace DesignPatterns\Creation\Prototype\Interfaces;

abstract class LivroPrototype
{


    private string $title;
    private string $content;
    private string $nameTitular;


    private function isProp($prop): ?bool
    {
        if (!property_exists($this, $prop))
            throw new \Exception("Property $prop does not exist");

        return true;
    }

    public function __get($attr)
    {
        $this->isProp($attr);

        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->isProp($attr);

        $this->$attr = $value;
    }
}