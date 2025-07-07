<?php 
use core\Controller;
class Home extends Controller
{
    public function index(){

        if(!Auth::check()){
            $this->redirect('login');
        }
        echo $this->view('home');
    }
   
}