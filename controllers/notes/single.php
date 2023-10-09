<?php

use Core\Database;

use Core\App;
// $config = require base_path("config.php");
// $db = new Database($config['database']);

$db = App::resolve(Database::class);

$currentUser = 1;
 
$note = $db->query('select * from notes where id = :id ',[
    'id' => $_GET['id']
    ])->findOrFail();

authorize($note['user_id'] == $currentUser);

view("notes/single.view.php",[
    'heading'=>'Note',
    'note' => $note,
]);
