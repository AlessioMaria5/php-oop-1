<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>OOP Boolflix</title>
</head>
<body>
    <section id="movie_list">
        <?php
            require __DIR__ .'/movie.php';
            require __DIR__ . '/actor.php';

            $firstMovie = new Movie('Il signore degli Anelli',$actors, 'https://www.rollingstone.it/wp-content/uploads/2017/11/il-signore-degli-anelli_01.jpg', 'Lorem Ipsum Descrizione');
            $firstMovie->stampData();

            $firstMovie = new Movie('Il signore degli Anelli',$actors, 'https://www.rollingstone.it/wp-content/uploads/2017/11/il-signore-degli-anelli_01.jpg', 'Lorem Ipsum Descrizione');
            $firstMovie->stampData();

        ?>
    </section>
</body>
</html>