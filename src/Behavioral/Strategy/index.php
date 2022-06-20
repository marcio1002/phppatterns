<?php
require_once dirname(__DIR__, 3) . '/vendor/autoload.php';


use 
    DesignPatterns\Behavioral\Strategy\CompressionContext;

use
    DesignPatterns\Behavioral\Strategy\Compress\{
        Zip,
        Rar,
        Tar
    };

$compression = new CompressionContext(new Zip);
$compression->compress('/tmp/test.zip');

$compression->setCompression(new Rar);
$compression->compress('/tmp/test.rar');

$compression->setCompression(new Tar);
$compression->compress('/tmp/test.tar');

$compression->orderFile();