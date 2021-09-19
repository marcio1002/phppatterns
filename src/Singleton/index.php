<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use PHPpatterns\Singleton\Logs\Debug;

$logs1 = Debug::getInstance();
$logs2 = Debug::getInstance();

echo $logs1 == $logs2 ? 'Objetos iguais' : 'Objetos diferentes';

$logs1->puts('Escrevendo padrões de projetos');

$logs2->puts('Esse é o padrão singleton');

$logs1->puts('Foi criado os padrões singleton e factory method');

echo $logs1->get();

//$logs2->clear();