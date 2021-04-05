<?php
require_once './controllers/Autoload.php';

$autoload= new Autoload();

$data = [
    "name"=>"jose",
  "user"=>"ruprosperi",
    "password"=>"ruben",
    "question"=>1,
    "answer"=>"noris",
    "rol"=>0
];

$data2 = [
    "id"=> 0,
    "name"=> "horror"
];
/*Categoria*/
//$categoria= new CategoriesController();
//$datos= $categoria->get(1);
//$categoria->del(1);

/*Usuario*/
$user = new UsersController();
//$user->set($data, 'update');
//$datos= $user->get('ruprosperi');
//$user->del('ruprosperi');

/*Entrada*/

echo "<pre>";
var_dump($datos);
echo "</pre>";


