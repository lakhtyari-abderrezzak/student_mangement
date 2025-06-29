<?php 

use \core\Controller;

class Register extends Controller{
    public function index(){
        if(count($_POST) > 0){
            $user = new User();

            if($user->validate($_POST)){
                

                $arr = [
                    'first_name' => getValue('first_name'),
                    'last_name' => getValue('last_name'),
                    'email' => getValue('email'),
                    'rank' => getValue('rank'),
                    'gender' => getValue('gender'),
                    'password' => password_hash(getValue('password'), PASSWORD_BCRYPT),
                    'date' => date('Y-m-d H:i:s'),
                ];

                $user->insert($arr);
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