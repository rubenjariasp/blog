<?php

class InputsController
{
    private $model;

    public function __construct()
    {
        $this->model = new InputsModel();
    }

    public function set($array, $activity)
    {   
        $this->model->set($array, $activity);
    }

    public function get($data=null){
        return $this->model->get($data);
    }

    public function del($data= null){
        return $this->model->del($data);
    }

    public function check_input($data){

        return $this->model->check_input($data);
    }
}