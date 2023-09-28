<?php

use App\Router;

spl_autoload_register(function ($class){
    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});

require __DIR__ . '/../routers.php/';



$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    call_user_func($match['action']);
}

//switch($_SERVER['REQUEST_URI']){
//    case'/':
//        include 'views/index.php';
//        break;
//    case'/about':
//        include 'views/about.php';
//        break;
//    default:
//    echo 404
//    break;
//}