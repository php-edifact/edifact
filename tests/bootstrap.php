<?php

$file = __DIR__ . '/../../../autoload.php';
if (\file_exists($file)) {
    include_once $file; //autoload from main composer autoloader
}

\error_reporting(\E_ALL | \E_STRICT);

require __DIR__ . '/classBootstrap.php';

Bootstrap::init();
