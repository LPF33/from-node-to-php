<?php

$serverDir = __DIR__.'/../';

require $serverDir.'src/bootstrap.php';

Router::load($serverDir.'src/routes/index.php')->direct(Request::uri());