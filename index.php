<?php
require_once './controllers/Autoload.php';

$autoload= new Autoload();

$data = [
    "id"=>3,
  "name"=>"Accion"
];

$category= new CategoriesController();
$item= $category->del(2);



