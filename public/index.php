<?php
require __DIR__ . "/../vendor/autoload.php";

$url = substr($_SERVER['REQUEST_URI'], 1);

$url = explode('/', $url);

$controller = isset($url[0]) && $url[0] ? $url[0] : 'home';

$action = isset($url[1]) && $url[1] ? $url[1] : 'index';

$params = isset($url[2]) && $url[2] ? $url[2] : null;

if (!class_exists($controller = "Site\Controllers\\" . ucfirst($controller) . 'Controller')) {
    die('404 - Página não encontrada.');
}

if (!method_exists($controller, $action)) {
    $action = 'index';
    $params = $url[1];
}

$response = call_user_func_array([new $controller, $action], [$params]);

print $response;