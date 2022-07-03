<?php

namespace DesignPatterns\Structural\Composite;

use DesignPatterns\Structural\Composite\Contracts\Graphic;

class CompoundGraphic implements Graphic
{

    /**
     *
     * @var \SplObjectStorage<Graphic>
     */
    private \SplObjectStorage $child_storage;

    public function __construct()
    {
        $this->child_storage = new \SplObjectStorage();
    }

    
    public function add(Graphic $child)
    {
        $this->child_storage->attach($child);
    }

    public function remove(Graphic $child): bool
    {
        if(!$this->child_storage->contains($child)) return false;
        
        $this->child_storage->detach($child);

        return true;
    }

    public function move(int $x, int $y)
    {
        foreach ($this->child_storage as $child) {
            $child->move($x, $y);
        }
    }

    public function draw()
    {
        foreach($this->child_storage as $child) {
            $child->draw();
        }
    }
}