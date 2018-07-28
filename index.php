<?php
spl_autoload_register(function($className){
    include_once($className . ".php");
});


include_once('app/helpers/ViewHelper.php');
include_once('app/helpers/UrlHelper.php');

$routes=[''=>'app\controllers\HomeController',
        'home'=>'app\controllers\HomeController',
        'products'=>'app\controllers\productController'];

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
    echo"<h1>404 page not found</h1>";
}
