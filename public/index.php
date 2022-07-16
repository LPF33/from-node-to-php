<?php
$serverDir = __DIR__.'/../';

require $serverDir . '/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('website');
$logger->pushHandler(new StreamHandler("$serverDir.app.log", Logger::INFO));
$logger->info('Site called: '. $_SERVER["REQUEST_URI"]);

require $serverDir.'src/bootstrap.php';

Router::load($serverDir.'src/routes/index.php')->direct(Request::uri());