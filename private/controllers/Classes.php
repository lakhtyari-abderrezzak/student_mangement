<?php 

use \core\Controller;

class Classes extends Controller
{
    public function index()
    {
        echo $this->view('classes', [
            'title' => 'Schools',
        ]);
    }
}