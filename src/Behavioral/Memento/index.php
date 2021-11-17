<?php

require_once dirname(__DIR__ , 3) . '/vendor/autoload.php';

use 
    DesignPatterns\Behavioral\Memento\Text,
    Helpers\Console;


$text = new Text();


$text
    ->write('M')
    ->write('a')
    ->write('r')
    ->write('c')
    ->write('i')
    ->write('o')
    ->write(' ')
    ->write('D')
    ->write('E')
    ->write('V');

$teste = "\e[00;31;0m" . PHP_VERSION . "\e[m";

Console::log($text->getText() . PHP_EOL, Console::FG_GREEN);

$text->undo();
$text->undo();
$text->undo();

Console::log($text->undo(), Console::FG_BLUE);