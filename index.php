<?php
require_once './controllers/Autoload.php';

$autoload= new Autoload();

$data = [
    "name"=>"jesus",
  "user"=>"rubenjariasp",
    "password"=>"ruben",
    "question"=>1,
    "answer"=>"noris",
    "rol"=>0
];

$data2 = [
    "id"=> 8,
    "name"=> "deporte"
];

$category = new CategoriesController();
$category->set($data2, 'update');


