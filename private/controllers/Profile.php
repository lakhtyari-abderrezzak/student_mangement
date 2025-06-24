<?php

use core\Controller;
class Profile extends Controller {
    public function index(){
        // Load the model
        $user = $this->loadModel('User');
        
        $userData = $user->findById(1); 
        
        $this->view('profile', [
            'user' => $userData[0] ?? null // Assuming the user ID is 1 for this example
        ]);
    }
}