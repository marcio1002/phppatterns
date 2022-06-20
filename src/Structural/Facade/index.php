<?php

require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use 
    DesignPatterns\Structural\Facade\LibraryFacades;


$codeProduct = '3454354545353453';
$cpf = '12334444374';

if(LibraryFacades::makeBook($codeProduct, $cpf))
    LibraryFacades::sendMessage($cpf,$codeProduct, 'API_KEY', '55MARCIO@DEV*(D');