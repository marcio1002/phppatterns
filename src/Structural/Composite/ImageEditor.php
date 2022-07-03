<?php

namespace DesignPatterns\Structural\Composite;

use DesignPatterns\Structural\Composite\Components\Circle;
use DesignPatterns\Structural\Composite\Components\Dot;
use DesignPatterns\Structural\Composite\Contracts\Graphic;

class ImageEditor
{
    private CompoundGraphic $components;

    /**
     *
     * @return void
     */
    public function load()
    {
        $this->components = new CompoundGraphic();
    }

    /**
     * 
     *
     * @param Graphic[] $components
     * @return void
     */
    public function groupSelect(array $components)
    {
        $group_components = new CompoundGraphic();

        foreach($components as $component) {
            $group_components->add($component);
            $this->components->remove($component);
        }

        $this->components->add($group_components);
    }

    public function draw()
    {
        $this->components->draw();
    }
}