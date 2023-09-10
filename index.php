<?php 
 
require "functions.php";

//require "router.php";

$connct = "mysql:host=localhost;port=3306;dbname=laralearndb;user=root;charset=utf8mb4"; // undrescore sign - return EXSP
$pdo = new PDO($connct);
$statement =  $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post){
    echo "<li>{$post['title']}</li>";
}
