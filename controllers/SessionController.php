<?php

class SessionController{
    private $model;

    public function __construct(){
        $this->model = new UsersModels();
    }

    public function login($array_data){
        return $this->model->CheckUser($array_data);
    }
}