<?php

use \core\Controller;

class Schools extends Controller
{
    public function index()
    {
        $school = new School();

        $schools = $school->findAll();

        echo $this->view('schools', [
            'title' => 'Schools',
            'schools' => $schools,
        ]);
    }
    public function add()
    {
        $errors = [];

        if (count($_POST) > 0) {

            $school = new School();
      
            if (!$school->validate($_POST)) {


                $arr = [
                    'school' => getValue('school'),
                    'date' => date('Y-m-d H:i:s'),
                ];

                $school->insert($arr);
                $this->redirect('schools');

            } else {
                $errors = $school->errors;
            }


        }
        echo $this->view('schools.add', [
            'errors' => $errors,
        ]);
    }
}