<?php
require_once './controllers/Autoload.php';

$autoload= new Autoload();

$route = isset($_GET['route']) ? $_GET['route'] : 'home';

$route= new Router($route);

//session_destroy();

