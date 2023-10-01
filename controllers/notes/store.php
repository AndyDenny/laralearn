<?php


use Core\Validator;
use Core\Database; 

$config = require base_path('config.php');
$db = new Database($config['database']);
$errors = [];

if (Validator::string($_POST['body'],1,1000)){
    $errors['body'] = 'A text contains too many letters, no more than 1000 required.';
}
 
if(!empty($errors)){
    view("notes/create.view.php",[
        'heading'=>'Create Note',
        'errors' => $errors,
    ]);
}

$db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)',[
    'body' => htmlspecialchars($_POST['body']),
    'user_id' => 1
]);

header('location: /notes');
die();