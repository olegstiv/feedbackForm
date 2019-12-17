<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 16.12.2019
 * Time: 13:54
 */

require 'app/lib/dev.php';
use app\core\Router;
use app\lib\Db;


spl_autoload_register( function( $class){
    $path = str_replace( '\\', '/', $class . ".php");
    if ( file_exists( $path)) {
        require $path;
    }
});

$new = new Router;
$new->run();


 ?>