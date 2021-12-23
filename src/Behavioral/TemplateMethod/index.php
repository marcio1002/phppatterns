<?php
require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use Helpers\Console;
use
    DesignPatterns\Behavioral\TemplateMethod\{
        Aliment,
        Electronics,
        Clothes
    };

$aliment = new Aliment();
$electronic = new Electronics();
$clothes = new Clothes();


$priceAliment = number_format($aliment->calcImpostoProduct(5), 2);
$priceElectronic = number_format($electronic->calcImpostoProduct(50), 2);
$priceClothes = number_format($clothes->calcImpostoProduct(23), 2);

Console::log(
    "Preço final do alimento: R\${$priceAliment} reais\n", 
    Console::FG_WHITE, 
    Console::BOLD
);
Console::log(
    "Preço final do Eletrônico: R\${$priceElectronic} reais\n", 
    Console::FG_GREEN_LIGHT,
    Console::BOLD
);
Console::log(
    "Preço final do vestuário: R\${$priceClothes} reais\n", 
    Console::FG_YELLOW,
    Console::BOLD
);
