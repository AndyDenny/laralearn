<?php 

require "functions.php";

$uri = $_SERVER["REQUEST_URI"]; 
 
dd($_SERVER);
if ($uri == '/about'){
    require 'controllers/about.php';
}else if($uri == '/'){
    require 'controllers/index.php';
}else if($uri == '/contacts'){
    require 'controllers/contacts.php';
}