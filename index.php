<?php

// print_r($_SERVER[REQUEST_URI]);

$route = $_SERVER[REQUEST_URI];

if($route == "/") {
    header("Location: /templates/home.php");
}


