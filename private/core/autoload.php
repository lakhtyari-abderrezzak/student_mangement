<?php 

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/App.php';
require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/Model.php';


spl_autoload_register(function($classname){
    $file = '../private/models/' . $classname . '.php';
    if(file_exists($file)){
        require_once $file;
    }else{
        echo "Model file for $classname not found.";
        exit;
    }
});