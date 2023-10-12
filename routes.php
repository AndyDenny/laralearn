<?php

$router->get('/notes','controllers/notes/index.php')->only('auth');
$router->get('/note','controllers/notes/single.php');
$router->delete('/note','controllers/notes/remove.php');
$router->get('/notes/create','controllers/notes/create.php');
$router->post('/notes','controllers/notes/store.php');

$router->get('/note/edit','controllers/notes/edit.php');
$router->patch('/note','controllers/notes/update.php');

$router->get('/','controllers/index.php');
$router->get('/about','controllers/about.php');
$router->get('/contacts','controllers/contacts.php');
 
$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register','controllers/registration/store.php');