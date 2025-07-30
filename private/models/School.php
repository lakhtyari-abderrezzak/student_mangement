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
    protected $afterSelect = [
        'getUser',
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

        if ($this->where('school', $DATA['school'])) {
            $this->errors['school'] = "School name already exists";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;

    }

    protected function setUserId($data)
    {
        if (isset($_SESSION['user'])) {
            $data['user_id'] = $_SESSION['user']->user_id;
        }
        return $data;
    }
    protected function setSlug($data)
    {
        $data['school_id'] = randomId(60);
        return $data;
    }
    protected function getUser($data){
        $user = new User();

        foreach($data as $key => $row){
            $result = $user->where('user_id', $row->user_id);
            $data[$key]->user = $result[0] ?? null; // Assuming you want the first user
        }
        return $data;
    }

}