<?php

class UsersModels extends Models {
    public function set($data,$activity){
        if($activity=='sugnin'){
            $this->query= "INSERT INTO users (name, user, password, question, answer, rol) VALUES ($data[name], $data[user], $data[password], $data[question], $data[answer], $data[rol]);
";
        }

        elseif ($activity=='update'){
            $this->query = "UPDATE users SET name='$data[name]' WHERE user= 'data[user]'";
        }

        $this->set_query();
    }
    public function get($id){
        $this->query = is_null($id)
            ? "SELECT * FROM users"
            : "SELECT * FROM users WHERE id= $id";

        $this->get_query();

        $data=[];

        foreach ($this->rows as $key => $value){
            array_push($data, $value);
        }

        return $data;
    }
    public function del($id){
        $this->query = "DELETE FROM users WHERE id=$id";

        echo $this->query;

        $this->set_query();
    }
}