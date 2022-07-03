<?php

require_once dirname(__DIR__, 3) . "/vendor/autoload.php";

use DesignPatterns\Structural\Composite\ImageEditor;
use DesignPatterns\Structural\Composite\CompoundGraphic;
use DesignPatterns\Structural\Composite\Components\Dot;
use DesignPatterns\Structural\Composite\Components\Circle;


$components = [
    new Dot(10, 10),
    new Dot(20, 20),
    new CompoundGraphic,
    new Dot(30, 30),
    new Dot(40, 40),
    new Circle(50, 50, 10),
    new CompoundGraphic,
    new Circle(60, 60, 20),
];

$image_editor = new ImageEditor();

$image_editor->load();

$image_editor->groupSelect($components);

$image_editor->draw();