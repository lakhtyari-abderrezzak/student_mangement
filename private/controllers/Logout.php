<?php

use core\Controller;
class Logout extends Controller
{

    public function index(){
        Auth::logout();
        $this->redirect('login');
    }

}