<?php

namespace DesignPatterns\Creation\Prototype\Contracts;

abstract class LivroPrototype
{

    private string $title;
    private string $content;
    private string $nameTitular;

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

    public function clone()
    {
        return clone $this;
    }

    private function isProp($prop): ?bool
    {
        if (!property_exists(__CLASS__, $prop))
            throw new \Exception("Property $prop does not exist");

        return true;
    }
}