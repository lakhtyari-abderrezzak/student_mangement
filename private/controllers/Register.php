<?php 

use \core\Controller;

class Register extends Controller{
    public function index(){
        if(isset($_POST)){
            $user = new User();

            if($user->validate($_POST)){
                
                
                $this->redirect('login');
                
            }else{

                $errors = $user->errors;
            }


        }
        echo $this->view('register', [
            'title' => 'Register',
            'errors' => $errors ?? []
        ]);
       
    }
} 