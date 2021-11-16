<?php
namespace  DesignPatterns\Creation\Builder\Interfaces;


use DesignPatterns\Creation\Builder\Foguetes\Foguete;

abstract class FogueteBuild {

    protected Foguete $foguete;

    public function __construct()
    {
        $this->foguete = new Foguete;
    }

    public function foguete(): Foguete
    {
        return $this->foguete;
    }

    abstract public function buildModel(): self;

    abstract public function buildEngines(): self;

    abstract public function buildFuels(): self;

    abstract public function buildSeats(): self;
}