<?php 

use \core\Controller;

class Tests extends Controller
{
    public function index()
    {
        echo $this->view('tests', [
            'title' => 'Schools',
        ]);
    }
}