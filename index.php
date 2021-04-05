<?php
require_once './controllers/Autoload.php';

$autoload= new Autoload();

$data = [
    "name"=>"eudorina",
  "user"=>"vallita",
    "password"=>"ruben",
    "question"=>1,
    "answer"=>"lourdes",
    "rol"=>0
];

$data2 = [
    "id"=> 9,
    "name"=> "roles"
];

$user= new UsersController();
$datos= $user->get('ruprosperi');

echo "<pre>";
var_dump($datos);
echo "</pre>";


