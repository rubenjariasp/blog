<?php


class InputsModel extends Models
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
            ? "SELECT i.*, u.name AS 'autor', u.user AS 'usuario', c.* FROM inputs i INNER JOIN users u ON i.user = u.user INNER JOIN categories c ON i.id_category = c.id"

            : "SELECT i.*, c.name AS 'categoria' FROM inputs i INNER JOIN categories c ON i.id_category = c.id WHERE id_category= $data";

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
}