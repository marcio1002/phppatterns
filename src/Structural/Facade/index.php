<?php

require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use 
    DesignPatterns\Structural\Facade\LibraryFacades;


$library = new LibraryFacades();

$codeProduct = '3454354545353453';
$cpf = '12334444374';

if($library->makeBook($codeProduct, $cpf))
    echo $library->sendMessage($cpf,$codeProduct, 'API_KEY', '55MARCIO@DEV*(D') ? '✅' : '❌';

