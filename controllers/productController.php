<?php

function render() {
    $product = getProduct();
    include_once("views/product.php");
}

function getProduct(){
    $product = "Computadora, Tablet, Celular";
    return $product;
}