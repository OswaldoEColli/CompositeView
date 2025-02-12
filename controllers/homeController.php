<?php

function render() {
    $home = getHome();
    include_once("views/home.php");
}

function getHome(){
    $home = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam nihil, totam rem assumenda aliquam iste libero, perferendis nam minima temporibus perspiciatis sed cumque dignissimos ipsum incidunt. Laudantium quisquam at repudiandae!";
    return $home;
}