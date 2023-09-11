<?php

class Database{

    public $connection;

    public function __construct()
    {
        $connct = "mysql:host=localhost;port=3306;dbname=laralearndb;user=root;charset=utf8mb4"; // undrescore sign - return EXSP
        $this->connection = new PDO($connct);
    } 

    public function query($query){ 

        $statement =  $this->connection->prepare($query);
        $statement->execute();
        
       return $statement;
        

    }
}