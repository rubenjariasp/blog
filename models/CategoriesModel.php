<?php


class CategoriesModel extends Models {
    public function set($data, $activity){
       if($activity=='insert'){
           $this->query = "INSERT INTO categories (id, name) VALUE (DEFAULT, '$data[name]')";
       }

       elseif ($activity == 'update'){
           $this->query = "UPDATE categories SET name = '$data[name]'  WHERE id = $data[id] ";
       }



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

        $this->set_query();
    }
}