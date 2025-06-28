<?php 

class User extends Model{

    public function validate($DATA){
        $this->errors = [];
        if(!preg_match('/^[a-zA-Z]+$/' ,$DATA['firstname'])){
            $this->errors['firstname'] = "only letters are allowed in first name";
        }
        if(!preg_match('/^[a-zA-Z]+$/' ,$DATA['lastname'])){
            $this->errors['lastname'] = "only letters are allowed in last name";
        }
        if(empty($DATA['firstname'])){
            $this->errors['firstname'] = "First name is required";
        }
        if(empty($DATA['lastname'])){
            $this->errors['lastname'] = "Last name is required";
        }
        if(!filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = "Invalid email format";
        }
        if(empty($DATA['email'])){
            $this->errors['email'] = "Email is required";
        }
        $ranks = ['student', 'reception', 'lecturer', 'admin', 'super-admin'];

        if(empty($DATA['rank'])|| !in_array($DATA['rank'], $ranks)){
            $this->errors['rank'] = "Rank is required and must be one of the predefined options";
        }

        $genders = ['female', 'male'];
        if(empty($DATA['gender'])|| !in_array($DATA['gender'], $genders)){
            $this->errors['gender'] = "Gender is required and must be one of the predefined options";
        }
        
        if(empty($DATA['password'])){
            $this->errors['password'] = "Password is required";
        }

        if($DATA['password'] != $DATA['confirm_password']){
            $this->errors['confirm_password'] = "Passwords do not match";
        }
        if(count($this->errors) == 0){
            return true;
        }
        return false;
    }
}