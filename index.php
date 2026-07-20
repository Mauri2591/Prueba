<?php
include_once __DIR__ . "/Config.php";
if(isset($_SERVER) && $_SERVER['REQUEST_URI'] == '/Prueba/'){
    header('Location:'.URL."/users/");
    exit();
}