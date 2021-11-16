<?php

namespace DesignPatterns\Creation\Builder\Foguetes;

class Foguete
{
    private string $model;
    private string $engines;
    private string $fuels;
    private string $seats;

    public function __toString()
    {
        return trim("
            \e[00;33;4mModelo:\e]m \e[00;36;1m {$this->model}\n\e]m
            \e[00;33;4mMotores:\e]m \e[00;36;1m {$this->engines}\n\e]m
            \e[00;33;4mCombustivel:\e]m \e[00;36;1m {$this->fuels}\n\e]m
            \e[00;33;4mLugares:\e]m \e[00;36;1m {$this->seats}\n\n\e]m
        ");
    }


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
}
