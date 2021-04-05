<?php

class UsersController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModels();
    }

    public function set($array, $activity)
    {
        $this->model->set($array, $activity);
    }

    public function get($data=null){
        return $this->model->get($data);
    }

    public function del($data= null){
        $this->model->del($data);
    }
}