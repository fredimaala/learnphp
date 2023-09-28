<?php
use App\Router;

Router::addRoute('/', function(){
    $name = 'fredi';
    include 'view/about.php';

});

Router::addRoute('/about', function(){
    include 'views/about.php';
});