<?php

$router->get('/notes','controllers/notes/index.php');
$router->get('/note','controllers/notes/single.php');
$router->get('/notes/create','controllers/notes/create.php');
 
$router->get('/','controllers/index.php');
$router->get('/about','controllers/about.php');
$router->get('/contacts','controllers/contacts.php');
 

