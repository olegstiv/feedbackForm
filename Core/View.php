<?php

<<<<<<< HEAD:App/Core/View.php
namespace App\Core;
=======
namespace Core;
>>>>>>> de5108c15ccf69869f69e3415a486ebe1fa1afaf:Core/View.php

class View
{

    public $path;
    public $layout = 'default';
    public $route;

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = 'app/views/' . $route['controller'] . '/' . $route['action'] . '.php';

    }

    public function render($title, $vars = [], $messages = [])
    {

        extract($vars);
        extract($messages);
        if (file_exists($this->path)) {
            ob_start();
            require $this->path;
            $content = ob_get_clean();
            require "app/views/layouts/" . $this->layout . '.php';
        }
    }


}