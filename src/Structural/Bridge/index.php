<?php
require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use 
    DesignPatterns\Structural\Bridge\RemoteControls\Remote,
    DesignPatterns\Structural\Bridge\RemoteControls\AdvancedControl;

use
    DesignPatterns\Structural\Bridge\Devices\TV,
    DesignPatterns\Structural\Bridge\Devices\Radio;
use Helpers\Console;

$remoteControl = new Remote(new Radio());
$remoteControl->togglePower();
$remoteControl->volumeUp();
$remoteControl->volumeUp();
$remoteControl->volumeUp();
$remoteControl->channelUp();

$remoteControl->info();

$remoteAdvancedControl = new AdvancedControl(new TV());
$remoteAdvancedControl->togglePower();
$remoteAdvancedControl->volumeUp();
$remoteAdvancedControl->volumeUp();
$remoteAdvancedControl->channelUp();
$remoteAdvancedControl->channelUp();

$remoteAdvancedControl->info();

$remoteAdvancedControl->mute();
$remoteAdvancedControl->info();