<?php


class UsersModels extends Models
{
    public function set($array, $activity)
    {
        if ($activity == 'insert') {
            $this->query = "INSERT INTO users (name, user, password, question, answer, rol) VALUE(CONCAT('$array[name]', ' ', '$array[lastname]'), '$array[email]', MD5('$array[password]'), $array[question], '$array[answer]', 1)";
        }
        elseif ($activity == 'update') {

            $user= $this->CheckUser($array);

            if( count($user) > 0 ){
                $this->query = "UPDATE users SET name = CONCAT('$array[name_u]',' ', '$array[lastname_u]') WHERE user= '$array[email]'";

            }else{
                $_SESSION['error']['user_up']= 'ok';
            }
        }

        $this->set_query();
    }

    public function get($data)
    {
        $this->query = is_null($data)
            ? "SELECT * FROM users"

            : "SELECT * FROM users WHERE user= '$data' ";

        $this->get_query();

        $request = [];

        foreach ($this->rows as $key => $value) {
            array_push($request, $value);
        }

        return $request;
    }

    public function del($data)
    {
        $this->query = "DELETE FROM users WHERE user = '$data'";

        $this->set_query();
    }

    public function CheckUser($array_data){
        $this->query = "SELECT * FROM users WHERE user = '$array_data[email]' AND password = MD5('$array_data[password]') ";

        $this->get_query();

        $request = [];

        foreach ($this->rows as $key => $value) {
            array_push($request, $value);
        }

        return $request;
    }
}