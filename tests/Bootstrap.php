<?php
include_once __DIR__.'/../../../autoload.php'; //autoload from main composer autoloader
error_reporting(E_ALL | E_STRICT);
chdir(__DIR__);

require('classBootstrap.php');

Bootstrap::init();
