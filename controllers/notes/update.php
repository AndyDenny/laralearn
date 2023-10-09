<?php

use Core\Validator;
use Core\Database;
use Core\App;
 
$db = App::resolve(Database::class);

$currentUser = 1;
 
$note = $db->query('select * from notes where id = :id ',[
    'id' => $_POST['id']
    ])->findOrFail();


authorize($note['user_id'] == $currentUser);

$errors = [];

if (Validator::string($_POST['body'],1,1000)){
    $errors['body'] = 'A text contains too many letters, no more than 1000 required.';
}

if (count($errors)){
    return view('notes/edit.view.php',[
        'heading' => 'Edit note',
        'errors' => $errors,
        'note' => $note,
    ]);
}

$db->query('update notes set body = :body where id = :id',[
    'id'=> $_POST['id'],
    'body'=> $_POST['body'],
]);

header('location: /notes');
die();