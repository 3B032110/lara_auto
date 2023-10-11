<?php
require '../vendor/autoload.php';

// 類別先import進來
use Demo\Hello\Lara;
use Demo\Hello\Someone;
$lara= new Lara();
$vincent= new Someone('Vincent');

// 類別未先import進來
$mary= new \Demo\Hello\Someone('Mary');
$john= new Demo\Hello\Someone('John');
$hello= new Demo\HelloWorld();

use Demo\HelloWorld as World; // 類別另取別名
$world = new World();

// DEBUG
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create the logger
$logger = new Logger('WISD');
// Now add some handlers
$logger->pushHandler(new StreamHandler('../log/my.log', Level::Debug));

// You can now use your logger
$logger->info('My logger is now ready');
