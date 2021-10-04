<?php

namespace PHPpatterns\CreationPatterns\Builder\Factories;

use 
   PHPpatterns\CreationPatterns\Builder\Foguetes\Foguete,
   PHPpatterns\CreationPatterns\Builder\Interfaces\FogueteBuild;

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