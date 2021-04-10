<?php


class InputsModel extends Models
{
    public function set($array, $activity)
    {
        if ($activity == 'insert') {
            $this->query = "INSERT INTO inputs (id, id_category, user, title, description, fecha) VALUE(DEFAULT, $array[categoria], '$array[user]', '$array[title]', '$array[description]', CURRENT_DATE())";
        }
        elseif ($activity == 'update') {
            $this->query = "UPDATE inputs SET title='$array[title]', description = '$array[description]' WHERE id= $array[id] ";
        }
        $this->set_query();
    }

    public function get($data)
    {
        $this->query = is_null($data)
            ? "SELECT i.*, u.name AS 'autor', u.user AS 'usuario', c.name as 'categoria' FROM inputs i INNER JOIN users u ON i.user = u.user INNER JOIN categories c ON i.id_category = c.id"

            : "SELECT i.*, u.name AS 'autor', u.user AS 'usuario', c.name as 'categoria' FROM inputs i INNER JOIN users u ON i.user = u.user INNER JOIN categories c ON i.id_category = c.id WHERE i.id_category= $data";

        $this->get_query();

        $request = [];

        foreach ($this->rows as $key => $value) {
            array_push($request, $value);
        }

        return $request;
    }

    public function del($data)
    {
        $this->query = "DELETE FROM inputs WHERE id = '$data'";

        $this->set_query();
    }

    public function check_input($data){

        $this->query = "SELECT i.*, u.name AS 'autor', u.user AS 'usuario', c.name as 'categoria' FROM inputs i INNER JOIN users u ON i.user = u.user INNER JOIN categories c ON i.id_category = c.id WHERE i.id= $data";

        $this->get_query();

        $request = [];

        foreach ($this->rows as $key => $value) {
            array_push($request, $value);
        }

        return $request;
    }
}