<?php

namespace Core;

class View
{

    public $path;
    public $layout = 'default';
    public $route;

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = 'Views/' . $route['controller'] . '/' . $route['action'] . '.php';

    }

    public function render($title, $vars = [], $messages = [])
    {

        extract($vars);
        extract($messages);
        if (file_exists($this->path)) {
            ob_start();
            require $this->path;

            $content = ob_get_clean();
            require "Views/layouts/" . $this->layout . '.php';
        }
    }


}