<?php
require __DIR__ . '/../vendor/autoload.php';

// quebra a URI iniciando pelo indice 1
$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode("/", $url);

// definindo o controller padrao
$controller = isset($url[0]) && $url[0] ? $url[0] : 'page';
// definindo o metodo padrao
$action = isset($url[1]) && $url[1] ? $url[1] : 'index';
$param = isset($url[2]) && $url[2] ? $url[2] : null;

// coloca a primeira letra da String em maiusculo e concatena - PageController
if (!class_exists($controller = "Code\Controller\\" . ucfirst($controller) . 'Controller')) {
    die ("404 - Página não encontrada!");
}

if (!method_exists($controller, $action)) {
    $action = 'index';
    $param = $url[1];
}

// instancia o Controller de acordo com o controller e o metodo passado na url
$response = call_user_func_array([new $controller, $action], [$param]);

print $response;
