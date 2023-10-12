<?php

use Core\Database;
use Core\Validator;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if(!Validator::email($email)){
    $errors['email'] = 'Email not valid';
} 

if(!Validator::string($password,7,255)){
    $errors['password'] = 'Input password from 7 to 255 characters';
}

if(!empty($errors)){
    return view('registration/create.view.php',[
        'errors' => $errors
    ]);

}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email',[
    'email'=>$email
])->find();

if($user){
    header('location: /');
    exit();
}else{
    $db->query('INSERT INTO users(email, password) VALUES (:email, :password)',[
        'email'=>$email,
        'password'=>$password
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();

}