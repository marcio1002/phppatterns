<?php

namespace PHPpatterns\Builder\Factories;

use 
    PHPpatterns\Builder\Foguetes\Foguete,
    PHPpatterns\Builder\Interfaces\FogueteBuild;

class FactoryFoguete {

    private FogueteBuild $foguete; 

    public function __construct(FogueteBuild $foguete)
    {
        $this->foguete = $foguete;
    }

    public function createFoguete(): Foguete
    {
        $this->foguete
            ->buildModel()
            ->buildEngines()
            ->buildFuels()
            ->buildSeats();

        return $this->foguete->foguete();
    }
}