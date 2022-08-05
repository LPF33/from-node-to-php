<?php
$serverDir = __DIR__.'/../';
define('PRODUCTION', !str_starts_with($_SERVER['HTTP_HOST'],'localhost'));

require $serverDir . '/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use \Bepsvpt\SecureHeaders\SecureHeaders;

$logger = new Logger('website');
$logger->pushHandler(new StreamHandler(PRODUCTION ? 'php://stderr' : $serverDir.'app.log', Logger::INFO));
$logger->info('Site called: '. $_SERVER["REQUEST_URI"].' from: '.$_SERVER["REMOTE_ADDR"]);

$secureHeaders = SecureHeaders::fromFile($serverDir.'src/secure-headers.php');
$secureHeaders->headers();
$secureHeaders->send();

require $serverDir.'src/bootstrap.php';

Router::load($serverDir.'src/routes/index.php')->direct(Request::uri());