<?php

/*************************************
 * Request ($_SERVER, $_POST)
 *************************************/
$request = new Armonya\Request\Request();

/*************************************
 * Routing
 *************************************/
$router = new Armonya\Router\Router($request);

require(__DIR__ . '/routes.php');


// THE ROUTER START WORKING
$router->dispatch();