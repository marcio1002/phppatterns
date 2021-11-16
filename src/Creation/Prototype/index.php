<?php
require_once dirname(__DIR__, 3) . "/vendor/autoload.php";

use 
    DesignPatterns\Creation\Prototype\Livros\LivroPHP,
    DesignPatterns\Creation\Prototype\Livros\LivroPython;

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
    echo "
        \e[00;37;4mTitulo:\e]m \e[00;32;1m {$livro->title}\n\n\e]m
        \e[00;37;4mConteudo:\e]m \e[00;33;1m {$livro->content}\n\n\e]m
        \e[00;37;4mNome Titular:\e]m \e[00;36;1m {$livro->nameTitular}\n\n\n\n\e]m
    ";
}