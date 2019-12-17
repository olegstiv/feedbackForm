<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 16.12.2019
 * Time: 14:29
 */

namespace app\core;

abstract class Controller
{
    public $route;
    public $view;
    public $model;

    public function __construct( $route )
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel( $name )
    {
        $path = 'app\models\\' . ucfirst($name);
        if ( class_exists( $path ))
        {
            return new $path;
        }
    }




}