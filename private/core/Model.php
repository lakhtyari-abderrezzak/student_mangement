<?php 

class Model extends Database {
    

    public function __construct(){
        if(!property_exists($this, 'table')){
            $this->table = strtolower($this::class) . 's'; 
        }
    }
    public function findAll(){

        $query = "SELECT * FROM " . $this->table;
        // $this->query() method is inherited from Database class;
        return $this->query($query);

    }
    public function findById($id){

        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";

        return $this->query($query, ['id' => $id]);

    }
}