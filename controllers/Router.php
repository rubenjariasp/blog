<?php

class Router{
    private $route;

    public function __construct($route){
        $this->route = $route;
        if( is_array($route) ){
            $this->route = $route[0];
        }

        $load_view = new ViewController();

        switch ($this->route) {
            case 'home':
                $load_view->load_wiew('home');
            break;

            case 'inputs':
                $load_view->load_wiew('inputs');
            break;

            default:
                # code...
                break;
        }
    }
}

/*{
    public function __construct(){
        if(!isset($_SESSION)) session_start();

        if(!isset($_SESSION['login'])) $_SESSION['login'] = false;

        if($_SESSION['login']){
            //opciones de la WebApp
            $load_view = new ViewController();
            $load_view->load_wiew('start');
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
                    $login = $session->login($array_data);

                    if(count($login)>0){
                        $_SESSION['login']= true;
                        foreach($login as $row){
                            $_SESSION['name'] = $row['name'];
                            $_SESSION['user'] = $row['user'];
                        }
                        header('location:./');
                    }else{
                        echo 'nada';
                    }
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