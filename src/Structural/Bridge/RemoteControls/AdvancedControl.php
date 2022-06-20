<?php

namespace DesignPatterns\Structural\Bridge\RemoteControls;


class AdvancedControl extends Remote
{
    public function mute()
    {
        $this->device->setVolume(0);
    }
}