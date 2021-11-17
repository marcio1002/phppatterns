<?php
require_once dirname(__DIR__, 3) . "/vendor/autoload.php";

use 
    DesignPatterns\Creation\Prototype\Livros\LivroPHP,
    DesignPatterns\Creation\Prototype\Livros\LivroPython;
use Helpers\Console;

$livroPHP = new LivroPHP;
$livroPHP->title = "PHP Patterns";
$livroPHP->content = 'Construindo padros de projeto com patterns';

$livroPython = new LivroPython;
$livroPython->title = "Tratamento de dados com Machine learning usando python";
$livroPython->content = "A partir de uma estrutura  podemos abstrair e analisar  dados combinando suas propriedades...";


$livros = [];

$titulars = [
    'Anna',
    'Marcio',
    'Beatriz',
    'Jose'
];

foreach($titulars as $titular) {
    $livroBuyerPHP = clone $livroPHP;
    $livroBuyerPHP->nameTitular = $titular;
    $livros[] = $livroBuyerPHP;

    $livroBuyerPython = clone $livroPython;
    $livroBuyerPython->nameTitular = $titular;
    $livros[] = $livroBuyerPython;
}


foreach($livros as $livro) {
    Console::log($livro->title . PHP_EOL, Console::FG_GREEN, Console::BOLD);
    Console::log($livro->content . PHP_EOL, Console::FG_GREEN_LIGHT, Console::BOLD);
    Console::log($livro->nameTitular . PHP_EOL, Console::FG_YELLOW, Console::BOLD);
    echo PHP_EOL;
}