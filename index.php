<?php

declare(strict_types=1);

namespace App;

use Exception;

session_start();



require_once('src/Utils/debug.php');
require_once('src/View.php');
require_once('src/Controller.php');

$configuration = require_once('config/config.php');

//dump($_SESSION);


$request = [
  'get' => $_GET,
  'post' => $_POST
];

try {
  Controller::initConfiguration($configuration);
  $controller = new Controller($request);
  $controller->run();
} catch (Exception $e) {
  echo '<h1>' . $e->getMessage() . '</h1>';
}
