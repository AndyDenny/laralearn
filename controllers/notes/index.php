<?php

use Core\Database;
use Core\App;
// $config = require base_path("config.php");
// $db = new Database($config['database']);

$db = App::resolve(Database::class);

$notes = $db->query('select * from notes')->get();
 
view("notes/index.view.php",[
    'heading'=>'My Notes',
    'notes' => $notes,
]);