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

    public function loadModel($model){
        $modelPath = '../private/models/' . $model . '.php';
        if (file_exists($modelPath)) {
            require_once $modelPath;
            return new $model();
        } else {
            throw new \Exception("Model not found: " . $model);
        }
    }
}