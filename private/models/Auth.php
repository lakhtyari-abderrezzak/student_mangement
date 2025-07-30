<?php


class Auth
{

    public static function attempt($user)
    {
        $_SESSION['user'] = $user;
    }

    public static function logout()
    {
        unset($_SESSION['user']);
    }

    public static function check()
    {
        return isset($_SESSION['user']);
    }

    public static function user()
    {
        return isset($_SESSION['user']) ? $_SESSION['user']->first_name : null;
    }

    public static function __callStatic($methods, $props)
    {
        if (isset($_SESSION['user'])) {
            $props = strtolower(str_replace('get', '', $methods));
            if (isset($_SESSION['user']->$props)) {
                return $_SESSION['user']->$props;
            } else {
                return 'Unknown';
            }
        }
    }
    public static function switchSchool($id)
    {
        if (isset($_SESSION['user']) && $_SESSION['user']->rank === 'super-admin') {
            $user = new User();
            $school = new School();

            $row = $school->where('id', $id);
            if ($row) 
            {

                $row = $row[0];

                $arr['school_id'] = $row->school_id;
               $user->update($_SESSION['user']->id, $arr);
                $_SESSION['user']->school_id = $row->school_id;
                $_SESSION['user']->school_name = $row->school;

                return true;
                 
                
            }
        }
        return false;
    }
}