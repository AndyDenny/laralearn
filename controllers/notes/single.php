<?php

use Core\Database;

$config = require ("config.php");
$db = new Database($config['database']);

$currentUser = 1;
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $note = $db->query('select * from notes where id = :id ',[
        'id' => $_GET['id']
        ])->findOrFail();

    authorize($note['user_id'] == $currentUser);

    $db->query('delete from notes where id = :id',[
        'id'=>$_GET['id']
    ]);

    header ('location: /notes');
    exit();

}else{ 

    $note = $db->query('select * from notes where id = :id ',[
        'id' => $_GET['id']
        ])->findOrFail();

    authorize($note['user_id'] == $currentUser);
    
    require view("notes/single.view.php",[
        'heading'=>'Note',
        'note' => $note,
    ]);
}