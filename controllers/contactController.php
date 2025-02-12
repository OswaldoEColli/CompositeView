<?php

function render() {
    $contact = getContact();
    include_once("views/contact.php");
}

function getContact(){
    $contact = "Contacto: al062423@uacam.mx";
    return $contact;
}