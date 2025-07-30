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
        if (!Auth::check()) {
            return $this->redirect('login');
        }
        $errors = [];
        if (count($_POST) > 0) {
    
            $school = new School();

            if ($school->validate($_POST)) {

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
    public function edit($id = null)
    {
        if (!Auth::check()) {
            return $this->redirect('login');
        }
        $errors = [];

        $school = new School();

        $row = $school->findById($id)[0] ;
        if (!$row) {
            $this->redirect('schools');
        }

        if (count($_POST) > 0) {
            

            if (!$school->validate($_POST)) {

                $arr = [
                    'school' => getValue('school'),
                    'date' => date('Y-m-d H:i:s'),
                ];

                $school->update($id,  $arr);
                $this->redirect('schools');

            } else {
                $errors = $school->errors;
            }


        }
        echo $this->view('schools.edit', [
            'errors' => $errors,
            'row' => $row,
        ]);
    }
    public function delete($id)
    {
        if(!Auth::check()) {
            return $this->redirect('login');
        }
        $school = new School();
        $row = $school->findById($id)[0] ?? null;

        if (!$row) {
            $this->redirect('schools');
        }
        if (count($_POST) > 0) {
            $school->delete($id);
            $this->redirect('schools');
        }
        echo $this->view('schools.delete', [
            'title' => 'Delete School',
            'row' => $school->findById($id)[0],
        ]);
    }
}