<?php
require_once dirname(__DIR__, 3) . "/vendor/autoload.php";

use 
    DesignPatterns\Structural\Adapter\Erps\Erp,
    DesignPatterns\Structural\Adapter\Erps\ErpAdapter,
    DesignPatterns\Structural\Adapter\Models\Order,
    Helpers\Console;

$erpAdapter = new ErpAdapter(new Erp);


$order = new Order;

$order
    ->setNumberOrder('90342710867')
    ->addProduct('Lapis')
    ->addProduct('Cadeira de escritorio')
    ->addProduct('Laptop ASSUS INTEL i51084b 8GB 256 SDD')
    ->addProduct('10 Sensores de presença');

$token = $erpAdapter->generateToken('TOKEN_API', 'User TESTE');

$sended = $erpAdapter->sendOrder($order, $token);

echo PHP_EOL;

Console::log($sended ? 'Pedido Enviado com sucesso' : 'Nao foi possivel fazer o envio do pedido');