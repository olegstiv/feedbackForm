<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 16.12.2019
 * Time: 14:29
 */

namespace app\core;


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

    public function render($title, $vars = [])
    {

        extract($vars);
        if (file_exists( $this->path ))
        {
            ob_start();
            require $this->path;
            $content = ob_get_clean();
            require "app/views/layouts/" . $this->layout . '.php';
        }
    }


}