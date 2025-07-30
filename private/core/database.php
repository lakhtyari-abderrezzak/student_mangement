<?php 

class Database{

    private function connect(){
         $dsn =  DB_DSN;
         try {
            $conn = new PDO($dsn, DB_USER, DB_PASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
            }
    }

    public function query($query, $params = [], $fetchMode = "object"){
        $con = $this->connect();
        $stmt = $con->prepare($query);
        
        if($stmt){
            $check = $stmt->execute($params);
            if($check){
                if($fetchMode !== 'object'){
                     $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else{
                    return $stmt->fetchAll(PDO::FETCH_OBJ);
                } 
                return true;
            }
            
        } 
        return false;
    }

}