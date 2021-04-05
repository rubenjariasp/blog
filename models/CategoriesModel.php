<?php


class CategoriesModel extends Models {
    public function set($array, $activity){
       if($activity=='insert'){
           $this->query = "INSERT INTO categories (id, name) VALUE (DEFAULT, '$array[name]')";
       }

       elseif ($activity == 'update'){
           $this->query = "UPDATE categories SET name = '$array[name]'  WHERE id = $array[id] ";
       }



       $this->set_query();
    }
    public function get($data){
        $this->query = is_null($data)
            ? "SELECT * FROM categories"
            : "SELECT * FROM categories WHERE id= $data";

        $this->get_query();

        $request=[];

        foreach ($this->rows as $key => $value){
            array_push($request, $value);
        }

        return $request;
    }
    public function del($data){
        $this->query = "DELETE FROM categories WHERE id=$data";

        $this->set_query();
    }
}