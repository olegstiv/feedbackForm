<?php

<<<<<<< HEAD:App/Core/Router.php
namespace App\Core;
=======
namespace Core;
>>>>>>> de5108c15ccf69869f69e3415a486ebe1fa1afaf:Core/Router.php

class Router
{

    protected $routes = [];
    protected $params = [];

    function __construct()
    {

        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $value) {
            $this->add($key, $value);
        }
    }

    public function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;

    }

    public function run()
    {
        if ($this->match()) {
            $path = 'app\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'] . 'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
//                   View::errorCode(404);
                }
            } else {
//                View::errorCode(404);
            }
        } else {
//            View::errorCode(404);

        }
    }
}


?>