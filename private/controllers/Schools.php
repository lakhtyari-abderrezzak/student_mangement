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
        $school = new School();

        $schools = $school->findAll();

        echo $this->view('schools.add', [
            'title' => 'Schools',
            'schools' => $schools,
        ]);
    }
}