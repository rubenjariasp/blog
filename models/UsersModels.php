<?php


class UsersModels extends Models
{
    public function set($array, $activity)
    {
        if ($activity == 'insert') {
            $this->query = "INSERT INTO users (name, user, password, question, answer, rol) VALUES ('$array[name]', '$array[user]',MD5('$array[password]'),$array[question],'$array[answer]',$array[rol])";
        }
        elseif ($activity == 'update') {
            $this->query = "UPDATE users SET name='$array[name]' WHERE user= '$array[user]' ";
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