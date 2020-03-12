<?php

include 'config.php';
require_once './controller/router.php';

session_start();

$router = new Router();
$router->determineDestination();
