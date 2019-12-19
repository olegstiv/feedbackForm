<?php

namespace Core;

abstract class Controller
{
    public $route;
    public $view;
    public $model;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);

    }

    public function loadModel($name)
    {
        $path = 'Models\\' . ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
    }


}