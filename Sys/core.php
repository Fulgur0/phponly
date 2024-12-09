<?php

use Sys\Http\Request;
use Sys\Http\View;
use Phponly\Onlydotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$request = new Request();
$request->uri = $_SERVER['REQUEST_URI'];
$request->method = $_SERVER['REQUEST_METHOD'];
$request->query_string = $_SERVER['QUERY_STRING'];
$request->time_float = $_SERVER['REQUEST_TIME_FLOAT'];
$request->time = $_SERVER['REQUEST_TIME'];

require_once 'routes.php';

if (isset($routes[$request->method][$request->uri])) {
    $path = explode('@', $routes[$request->method][$request->uri]);
    $controller = 'Sys\Controller\\' . $path[0];
    $method = $path[1];
    $controller = new $controller();
    $controller->$method();
} else {
    View::render('404');
}
