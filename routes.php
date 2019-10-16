<?php


$router->add('GET', '/', 'Controller@index');

$router->add('GET', '/page-1', function(){
    echo "GET Page 1 <br>";
    return null;
});

$router->add('GET', '/page-2', function(){
    echo "GET Page 2 <br>";
    return null;
});



$router->add('POST', '/', function($request){
    var_dump($request);
    return null;
});