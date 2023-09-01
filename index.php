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

    "Do Android Dreams of Electric Ship",
    "The Langoliers",
    "Hail Mary"
]
?>

<ul>
    <?
    foreach($books as $book):?>
        <li><?=$book;?></li>  
    <? endforeach;?>
    
</ul>

</body>
</html>

