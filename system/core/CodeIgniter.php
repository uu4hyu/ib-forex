<?php

require_once BASEPATH . 'core/Controller.php';

$routesPath = APPPATH . 'config/routes.php';
$routes = file_exists($routesPath) ? include $routesPath : [];

$requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');

if ($scriptDir !== '' && $scriptDir !== '.' && str_starts_with($requestUri, $scriptDir)) {
    $requestUri = substr($requestUri, strlen($scriptDir));
}

$uri = trim($requestUri, '/');
$routeKey = $uri === '' ? 'default_controller' : $uri;
$route = $routes[$routeKey] ?? ($uri === '' ? 'home/index' : $uri);

[$controllerSegment, $method] = array_pad(explode('/', $route, 2), 2, 'index');
$controllerName = ucfirst($controllerSegment);
$controllerClass = $controllerName;
$controllerPath = APPPATH . 'controllers/' . $controllerName . '.php';

if (!file_exists($controllerPath)) {
    http_response_code(404);
    echo 'Controller not found';
    return;
}

require_once $controllerPath;

if (!class_exists($controllerClass)) {
    http_response_code(500);
    echo 'Invalid controller class';
    return;
}

$controller = new $controllerClass();

if (!method_exists($controller, $method)) {
    http_response_code(404);
    echo 'Method not found';
    return;
}

$controller->{$method}();
