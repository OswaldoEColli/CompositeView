<?php

function includeController($controllerName) {

    require_once("controllers/{$controllerName}.php");
}

$page = $_GET["page"] ?? "/";

$route = [
    "/" => "homeController",
    "contact" => "contactController",
    "product" => "productController"
];

$controllerName = $route[$page] ?? null;

if ($controllerName) {

    includeController($controllerName);
    $action = "render";

    if (function_exists($action)) {

        $action();

    } else {

        http_response_code(404);
        echo "La página no existe";
    }


} else {

    http_response_code(404);
    echo "La página no existe";
}
