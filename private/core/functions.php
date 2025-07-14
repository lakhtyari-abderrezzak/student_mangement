<?php
function getValue($key)
{

    if (isset($_POST[$key])) {
        return htmlspecialchars(trim($_POST[$key]));
    }
    return '';
}
function getSelected($key, $value)
{
    if (isset($_POST[$key]) && $_POST[$key] == $value) {
        return 'selected';
    }
    return '';
}
function esc($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function randomId($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function get_date($date){
    return date('jS M, Y', strtotime($date));
}