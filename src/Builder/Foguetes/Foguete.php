<?php

namespace PHPpatterns\Builder\Foguetes;

class Foguete {

    /**
     * @property string $model
     * @property string $engines
     * @property string $fuels
     * @property string $seats
    */

    private array $attrs = [
        'model',
        'engines',
        'fuels',
        'seats'
    ];


    public function __toString()
    {
        return "\e[00;33;4mModelo:\e]m \e[00;36;1m {$this->model}\n\e]m
            \n\e[00;33;4Motores:\e]m \e[00;36;1m {$this->engines}\n\e]m
            \e[0\n0;33;4mCombustivel:\e]m \e[00;36;1m {$this->fuels}\n\e]m
            \e[00;3\n3;4mLugares:\e]m \e[00;36;1m {$this->seats}\n\e]m
      \n  ";
    }


    private function isAttr($attr): ?bool
    {
        if(!in_array($attr, $this->attrs)) 
            throw new \LogicException("Atribute $attr not search");

        return true;
    }

    public function __get($attr)
    {
       $this->isAttr($attr);

        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->isAttr($attr);

        $this->$attr = $value;
    }
}