<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Laracasts</title>
</head>
<body>
     
<h1>Recomended books</h1>


<?
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
?>
<ul>

    <? foreach ( $filteredBooks as $book): ?>
        <li>
            <a href="<?= $book['purchase_url'] ?>">
                <?= $book['name'] ?>
            </a> 
            (<?= $book['year'] ?> year) - By <?= $book['author'] ?>
        </li>
    <? endforeach; ?>

</ul>
 
</body>
</html>

