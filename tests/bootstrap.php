<?php

if (function_exists('xdebug_enable')) {
  xdebug_enable();
}

error_reporting(E_ALL | E_STRICT);

// Include the composer autoloader
$autoloader = require_once dirname(__DIR__) . '/vendor/autoload.php';
