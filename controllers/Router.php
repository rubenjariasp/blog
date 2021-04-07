<?php

class Router{
    public function __construct(){
        if(!isset($_SESSION)) session_start();

        $_SESSION['login'] = false;

        if($_SESSION['login']){
            //opciones de la WebApp
        }else{
            //validacion de credenciales
            if(isset($_POST['form'])){
                if($_POST['form']=='login'){
                    //programacion de login
                    $array_data= [];
                    foreach ($_POST as $key => $value) {
                        $array_data[$key]=$value;
                        unset($array_data['form']);
                    }
                    //var_dump($array_data);
                    $session = new SessionController();
                    $session->login($array_data);
                }else if($_POST['form']=='signin'){
                    //programacio de registro
                }
            }else{
                $load_view = new ViewController();
                $load_view->load_wiew('home');
            }
        }
    }
}