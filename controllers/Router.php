<?php

class Router{
    private $route;

    public function __construct($route){

        if(isset($_POST['form'])){
            if(!isset($_SESSION)) session_start();

            if(!isset($_SESSION['login'])) $_SESSION['login'] = false;

            if($_POST['form']=='login'){
                //programacion de login
                $array_data= [];
                foreach ($_POST as $key => $value) {
                    $array_data[$key]=$value;
                    unset($array_data['form']);
                }

                $session = new SessionController();
                $login = $session->login($array_data);

                if(count($login)>0){
                    $_SESSION['login']= true;
                    foreach($login as $row){
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['user'] = $row['user'];
                    }

                }else{
                    $_SESSION['error']['login']='ok';
                }
            }

            elseif($_POST['form']=='signin'){
                $array_data= [];
                foreach ($_POST as $key => $value) {
                    $array_data[$key]=$value;
                    unset($array_data['form']);
                }

                $user_new = new UsersController();
                $user_new->set($array_data, 'insert');
            }

            elseif($_POST['form']=='update_user'){
                $array_data= [];
                foreach ($_POST as $key => $value) {
                    $array_data[$key]=strtolower($value);
                    unset($array_data['form']);
                }

                $user_new = new UsersController();
                $user_new->set($array_data, 'update');
            }

        }

        if ( isset($_POST['input_crud']) ){
            if($_POST['input_crud'] == 'select'){
                $id = $_POST['id'];
                $url= URL.'input/'.$id.'/';

                header('location:'. $url);
            }

            if($_POST['input_crud'] == 'update'){
                $id = $_POST['id'];
                $url= URL.'input_update/'.$id.'/';

                header('location:'. $url);
            }

            if($_POST['input_crud'] == 'update_input'){
                $array_data= [];
                foreach ($_POST as $key => $value) {
                    $array_data[$key]=strtolower($value);
                    unset($array_data['input_crud']);
                }
                $input_up = new InputsController();
                $input_up->set($array_data, 'update');
            }

            if($_POST['input_crud'] == 'create_input'){
                $array_data= [];
                foreach ($_POST as $key => $value) {
                    $array_data[$key]=strtolower($value);
                    unset($array_data['input_crud']);
                }
                $input_cr = new InputsController();
                $input_cr->set($array_data, 'insert');
            }

            if($_POST['input_crud'] == 'delete'){
               $id= $_POST['id'];
               $input_del= new InputsController();
               $input_del->del($id);
            }
        }

        $this->route = $route;

        if( is_array($route) ){
            $this->route = $route[0];
        }

        $load_view = new ViewController();
        if(!isset($_SESSION)) session_start();

        switch ($this->route) {
            case 'home':
                $load_view->load_wiew('home');
            break;

            case 'inputs':
                $load_view->load_wiew('inputs');
            break;

            case 'input':
                $load_view->load_wiew('input');
            break;

            case 'input_update':
                $load_view->load_wiew('input_update');
            break;

            case 'input_create':
                $load_view->load_wiew('input_create');
            break;

            case 'logout':
                $load_view->load_wiew('logout');
            break;

            case 'user_update_info':
                $load_view->load_wiew('user_update_info');
            break;

            default:
                # code...
                break;
        }
    }
}

