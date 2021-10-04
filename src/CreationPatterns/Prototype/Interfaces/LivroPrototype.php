<?php

namespace PHPpatterns\CreationPatterns\Prototype\Interfaces;

abstract class LivroPrototype {
     
    /**
     * @property string $title
     * @property string $content
     * @property string $nameTitular
    */

    private array $attrs = [
        'title',
        'content',
        'nameTitular'
    ];
    
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