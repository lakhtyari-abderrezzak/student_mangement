<?php 

use \core\Controller;
class Users extends Controller
{
    public function index()
    {
        $user = new User();
        $users = $user->findAll();


        echo $this->view('users', [
            'users' => $users,
        ]);
    }
}