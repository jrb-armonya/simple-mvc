<?php

namespace Armonya\Router;

use Armonya\Request\Request;

class Router
{
    public $routes = [];

    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->currentURL = $request->request_uri;
        $this->currentMethod = $request->request_method;
    }

    public function add($method, $path, $closure)
    {
        $this->routes[] = [strtoupper($method), trim($path), $closure];
    }

    public function dispatch()
    {
        
        foreach($this->routes as $route){

            // $route[2] instanceof Closure
            if($route[1] === $this->currentURL && $route[0] === $this->currentMethod) {
                call_user_func($route[2], $this->request->post);
                return null;
            }
            // else if  is_string($route[2])
            // $controllerArray = explode('@', $route[2]);
            // list($controller, $method) = $controllerArray;
            // $action = new $controller();
            // $action->$method($params || null);
        }
        echo "404 NOT FOUND";
        return null;
    }

}