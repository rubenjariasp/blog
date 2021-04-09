<?php

class SessionController{
    private $model;

    public function __construct(){
        $this->model = new UsersModels();
    }

    public function login($array_data){
        return $this->model->CheckUser($array_data);
    }

    public function logout(){
        session_start();
        session_destroy();
        header('location:../');
    }

    public function clean_template(){
        $clear;
        if( isset($_SESSION['error']['login']) ){
            $clear =  $_SESSION['error']['login'] = null;
            return $clear;
        }

        if( isset($_SESSION['error']['user_up']) ){
            $clear =  $_SESSION['error']['user_up'] = null;
            return $clear;
        }
    }
}