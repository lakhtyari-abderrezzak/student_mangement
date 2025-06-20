<?php 

use \core\Controller;

class Register extends Controller{
    public function index(){
        echo $this->view('register');
    }
} 