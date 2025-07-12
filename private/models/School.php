<?php

class School extends Model
{
    protected $fillable = [
        'school',
        'date'
    ];
    protected $beforeInsert = [
        'setUserId',
        'setSlug',
    ];

    public function validate($DATA)
    {
        $this->errors = [];
        if (!preg_match('/^[a-zA-Z]+$/', $DATA['school'])) {
            $this->errors['school'] = "only letters are allowed in school name";
        }
        if (empty($DATA['school'])) {
            $this->errors['school'] = "School name is required";
        }

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
    protected function setSlug($data)
    {
        $data['slug'] = randomId(60);
        return $data;
    }

}