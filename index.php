<?php
$books = [
    
    [
        'name' => 'Do Android Dreams of Electric Ship',
        'author'=> 'Philip K. Dick',
        'purchase_url' => 'http://example.com',
        'year' => 1982
    ],
    [
        'name' => "Project Hail Mary",
        'author' => 'Andy Wair',
        'purchase_url' => 'http://example.com',
        'year' => 2021
    ],
    [
        'name' => "The Martian",
        'author' => 'Andy Wair',
        'purchase_url' => 'http://example.com',
        'year' => 2011
    ],
    
];
 
$filteredBooks = array_filter($books,function($book){
    return $book['year'] >= 1950 && $book['year'] <=2020;
});

require "index.view.php";