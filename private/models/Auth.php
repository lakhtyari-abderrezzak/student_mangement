<?php 


Class Auth {

    public static function attempt($user) {
            $_SESSION['user'] = $user;
    }

    public static function logout() {
        unset($_SESSION['user']);
    }

    public static function check() {
        return isset($_SESSION['user']);
    }

}