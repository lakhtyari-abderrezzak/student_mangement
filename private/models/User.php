<?php

class User extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'rank',
        'gender',
        'password',
        'date'
    ];
    protected $beforeInsert = [
        'hashPassword',
        'setUserId',
        'setSchoolId',
    ];

    public function validate($DATA)
    {
        $this->errors = [];
        if (!preg_match('/^[a-zA-Z]+$/', $DATA['first_name'])) {
            $this->errors['first_name'] = "only letters are allowed in first name";
        }
        if (!preg_match('/^[a-zA-Z]+$/', $DATA['last_name'])) {
            $this->errors['last_name'] = "only letters are allowed in last name";
        }
        if (empty($DATA['first_name'])) {
            $this->errors['first_name'] = "First name is required";
        }
        if (empty($DATA['last_name'])) {
            $this->errors['last_name'] = "Last name is required";
        }
        if (!filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Invalid email format";
        }
        if (empty($DATA['email'])) {
            $this->errors['email'] = "Email is required";
        }
        if ($this->where('email', $DATA['email'])) {
            $this->errors['email'] = "Email already exists";
        }
        $ranks = ['student', 'reception', 'lecturer', 'admin', 'super-admin'];

        if (empty($DATA['rank']) || !in_array($DATA['rank'], $ranks)) {
            $this->errors['rank'] = "Rank is required and must be one of the predefined options";
        }

        $genders = ['female', 'male'];
        if (empty($DATA['gender']) || !in_array($DATA['gender'], $genders)) {
            $this->errors['gender'] = "Gender is required and must be one of the predefined options";
        }

        if (empty($DATA['password'])) {
            $this->errors['password'] = "Password is required";
        }

        if ($DATA['password'] != $DATA['confirm_password']) {
            $this->errors['confirm_password'] = "Passwords do not match";
        }
        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    protected function hashPassword($data)
    {
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
    protected function setUserId($data)
    {
        $data['user_id'] = randomId(60);
        return $data;
    }
    protected function setSchoolId($data)
    {
        if (isset($_SESSION['user']->school_id)) {
            $data['school_id'] = $_SESSION['user']->school_id;
        }
        return $data;
    }
}