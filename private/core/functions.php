<?php 
function getValue($key){

    if(isset($_POST[$key])){
        return htmlspecialchars(trim($_POST[$key]));
    } 
    return '';
}
function getSelected($key, $value){
    if(isset($_POST[$key]) && $_POST[$key] == $value){
        return 'selected';
    }
    return '';
}
function esc($value){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}