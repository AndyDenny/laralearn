<?php


$config = require('config.php');
$db = new Database($config['database']);

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $errors = [];

    if (strlen($_POST['body']) == 0){
        $errors['body'] = 'A text required.';
    }
    
    if (strlen($_POST['body']) >= 1000){
        $errors['body'] = 'Too many letters, no more than 1000.';
    }

   if(empty($errors)){
    $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)',[
        'body' => htmlspecialchars($_POST['body']),
        'user_id' => 1
    ]);
   }
}

require "views/note-create.view.php";