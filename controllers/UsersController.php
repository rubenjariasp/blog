<?php

class UsersController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModels();
    }

    public function set($data, $activity)
    {
        $this->model->set($data, $activity);
    }

    public function get($id=null){
        return $this->model->get($id);
    }

    public function del($id= null){
        return $this->model->del($id);
    }
}