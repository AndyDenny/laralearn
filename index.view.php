<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Laracasts</title>
</head>
<body>
     
<h1>Recomended books</h1>
 
<ul>

    <?php foreach ( $filteredBooks as $book): ?>
        <li>
            <a href="<?= $book['purchase_url'] ?>">
                <?= $book['name'] ?>
            </a> 
            (<?= $book['year'] ?> year) - By <?= $book['author'] ?>
        </li>
    <?php endforeach; ?>

</ul>
 
</body>
</html>