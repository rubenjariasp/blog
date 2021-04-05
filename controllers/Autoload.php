<?php

class Autoload{
    public function __construct()
    {
        spl_autoload_register(function ($class){
            $models_path= './models/'. $class .'.php';
            $controllers_path= './controllers/'. $class .'.php';

            if(file_exists($models_path)) require_once $models_path;

            if (file_exists($controllers_path)) require_once $controllers_path;



        });
    }

}