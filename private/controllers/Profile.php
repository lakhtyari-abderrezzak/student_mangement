<?php

use core\Controller;
class Profile extends Controller {
    public function index(){
        // Load the model
        $user = new User();
        
        $id = $_GET['id'] ?? null;

        $userData = $user->findById($id); 
        if (!$userData) {
            // Handle the case where the user is not found
            $this->view('404', [
                'message' => 'User not found.'
            ]);
            return;
        }
        $this->view('profile', [
            'user' => $userData[0],

        ]);
    }
}