<?php

class ViewController{
    private $views_path= './views/';

    public function load_wiew($view){
        require_once $this->views_path .'header.php';
        require_once $this->views_path. $view .'.php';
        require_once $this->views_path .'footer.php';
    }
}