<?php

// Main application file
namespace Core;

class App
{
    protected $method = 'index';
    protected $controller = 'home';
    protected $params = array();

    public function __construct()
    {
        $URL = $this->getURL();

        if (file_exists('../private/controllers/' . $URL[0] . '.php')) {
            $this->controller = $URL[0];
            unset($URL[0]);
        }
        require_once '../private/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
    }

    private function getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        return explode('/', filter_var(trim($url, 'home'), FILTER_SANITIZE_URL));
    }
}