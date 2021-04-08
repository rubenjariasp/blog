<?php
require_once 'config.php';
require_once './controllers/Autoload.php';

$autoload= new Autoload();

$route= isset($_GET['route']) ? explode('/',$_GET['route']) : 'home';

$route= new Router($route);

//session_destroy();

