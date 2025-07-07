<?php

use core\Controller;
class Login extends Controller
{

    public function index()
    {
        
        if (count($_POST) > 0) {
            $errors = [];
            $user = new User();

            if ($user->where('email', getValue('email'))) {
                $user = $user->where('email', getValue('email'))[0];

                if(password_verify($_POST['password'], $user->password)){
                    Auth::attempt($user);
                    $this->redirect('home');
                }
            } else {
                $errors['email'] = "Email or password is incorrect";
            } 


        }
        echo $this->view('login', [
            'title' => 'login',
            'errors' => $errors ?? []
        ]);

    }

}