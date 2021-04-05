<?php


class CategoriesModel extends Models {
    public function set($data){
       $this->query= "REPLACE INTO categories (id, name) VALUES ($data[id], '$data[name]')";

       $this->set_query();
    }
    public function get($id){
        $this->query = is_null($id)
            ? "SELECT * FROM categories"
            : "SELECT * FROM categories WHERE id= $id";

        $this->get_query();

        $data=[];

        foreach ($this->rows as $key => $value){
            array_push($data, $value);
        }

        return $data;
    }
    public function del($id){
        $this->query = "DELETE FROM categories WHERE id=$id";

        echo $this->query;

        $this->set_query();
    }
}