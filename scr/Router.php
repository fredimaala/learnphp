<?php
namespace App;

class Router {
    private String $path;
    static $routes = [];
    public function __construct($path)
    {
        $this->path = $path;
    }

    public static function addRoute(string $path,callable|array $action){
        self::$routes[] = ['path'=>$path, 'action'=> $action];
    }
}
