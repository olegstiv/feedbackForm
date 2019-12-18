<?php
    
    require 'App/Lib/dev.php';
    
    use Core\Router;
    
    $loader = require_once 'vendor/autoload.php';
    $loader->addPsr4('Core\\', 'App/Core/');
    $loader->addPsr4('Controllers\\', 'App/Controllers/');
    $loader->addPsr4('Lib\\', 'App/Lib/');
    $loader->addPsr4('Models\\', 'App/Core/');
    $loader->addPsr4('Views\\', 'App/Core/');

    $new = new Router;
    $new->run();


?>