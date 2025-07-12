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

    public static function user() {
        return isset($_SESSION['user']) ? $_SESSION['user']->first_name : null;
    }

    public static function __callStatic($methods, $props){
        if (isset($_SESSION['user'])) {
            $props = strtolower(str_replace('get', '', $methods));
            if (isset($_SESSION['user']->$props)) {
                return $_SESSION['user']->$props;
            } else {
                return null;
            }
        }
    }

}