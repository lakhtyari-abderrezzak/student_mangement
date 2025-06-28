<?php 

class Model extends Database {
    
    public $errors = [];
    public function __construct(){
        if(!property_exists($this, 'table')){
            $this->table = strtolower($this::class) . 's'; 
        }
    }
    public function where($column, $value){
        // Ensure the column name is safe to use in a query
        $column = addslashes($column);
        $query = "SELECT * FROM " . $this->table . " WHERE " . $column . " = :" . $column;
        return $this->query($query, [$column => $value]);
        
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

    public function insert($data){
        $columns = implode(", ",  array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        $query = "INSERT INTO " . $this->table . " ($columns) VALUES ($placeholders)";

        return $this->query($query, $data);
    }

    public function update($id, $data){
        $set = "";
        foreach($data as $key => $value){
            $set .= "$key = :$key, ";
        }    
        $set = rtrim($set, ", ");
        $query = "UPDATE " . $this->table . " SET $set WHERE id = :id";
        $data['id'] = $id; // Add id to data for binding
        return $this->query($query, $data);
    }
    public function delete($id){
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $data['id'] = $id;

        return $this->query($query, $data);
    }
}
