<?php
namespace core;
class Controller
{

    public function view($view, $data = [])
    {
        extract($data);
        if (file_exists('../private/views/' . $view . '.view.php')) {
            require '../private/views/' . $view . '.view.php';
        } else {
            require '../private/views/404.view.php';
        }
    }

}