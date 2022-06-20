<?php

namespace DesignPatterns\Creation\Builder\Factories;

use 
   DesignPatterns\Creation\Builder\Foguetes\Foguete,
   DesignPatterns\Creation\Builder\Contracts\FogueteBuild;

class FactoryFoguete {

    private FogueteBuild $foguete; 

    public function __construct(FogueteBuild $foguete)
    {
        $this->foguete = $foguete;
    }

    public function createFoguete(): Foguete
    {
        return $this->foguete
            ->buildModel()
            ->buildEngines()
            ->buildFuels()
            ->buildSeats()
            ->foguete();
    }
}