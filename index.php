<?php
spl_autoload_register(function($className){
    include_once($className . ".php");
});


include_once('./helpers/ViewHelper.php');
include_once('./helpers/UrlHelper.php');

include_once('./routes/web.php');

$path=$_SERVER['REQUEST_URI'];
$params=explode("/",$path);


if(array_key_exists($params[1],$routes)){
    $controllerName = new $routes[$params[1]];
    $controller= new $controllerName();
    $method='index';
    if(!empty($params[2])){
        $method=$params[2];
    }

    if(method_exists($controller,$method)){
        $controller->{$method}();
       
    }   
    
}else{
    include_once('./views/errors/404.php');
}
