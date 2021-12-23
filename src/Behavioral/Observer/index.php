<?php
require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use 
    DesignPatterns\Behavioral\Observer\Observers\EmailObserver,
    DesignPatterns\Behavioral\Observer\Observers\PurchaseControlObserver,
    DesignPatterns\Behavioral\Observer\Subjects\InventoryStock;



$email = new EmailObserver();
$purchaseControl = new PurchaseControlObserver();
$stock = new InventoryStock();

$stock->add($email);
$stock->add($purchaseControl);

$stock->updateStock('10', 20);

$stock->updateStock('10', 0);

$stock->remove($email);