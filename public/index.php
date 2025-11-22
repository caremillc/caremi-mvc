<?php declare (strict_types = 1);

use Careminate\Application;

define('BASE_PATH', dirname(__DIR__));
define('ROOT_PATH', dirname(__FILE__));
define('ROOT_DIR', '/public/');

require_once BASE_PATH . '/vendor/autoload.php';

$app = new Application();
$app->start();
$app->dispatch();