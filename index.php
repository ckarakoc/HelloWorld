<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Max-Age: 600");
header("Access-Control-Allow-Methods: GET");
include_once("home.html");
echo "This is my config var: ";
echo getenv("TEST");
?>
