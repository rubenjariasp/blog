<?php

class Router{
    public function __construct(){
        if(!isset($_SESSION)) session_start();

        $_SESSION['login'] = false;

        if($_SESSION['login']){
            //opciones de la WebApp
        }else{
            //validacion de credenciales
            $load_view = new ViewController();
            $load_view->load_wiew('home');
        }
    }
}