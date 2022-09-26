<?php

include_once __DIR__ . '/classes/Movie.php';
include_once __DIR__ . '/classes/Actor.php';

$movies = [];

$LOTR1 = new Movie('Il signore degli anelli - La compagnia dell\'anello', './img/fellowship.jfif', ['fantasy', 'action']);

$LOTR2 = new Movie('Il signore degli anelli - Le due torri', './img/two-towers.jfif', ['fantasy', 'action']);

$LOTR3 = new Movie('Il signore degli anelli - Il ritorno del re', './img/return.jfif', ['fantasy', 'action']);

// var_dump($LOTR1);
// var_dump($LOTR2);
// var_dump($LOTR3);

$harry_potter = new Movie('Harry Potter e la pietra filosofale', 'https://i.ebayimg.com/images/g/9TkAAOSwtJZXVZP~/s-l400.jpg');

// var_dump($harry_potter);

$thor = new Movie('Thor - The dark world', './img/thor.jfif', ['fantasy', 'action'], 2013, ['Chris Hemsworth', 'Natalie Portman', 'Tom Hiddleston']);

// var_dump($thor);

$inglorious = new Movie('Bastardi senza gloria', './img/inglorious.jfif');

array_push($movies, $LOTR1, $LOTR2, $LOTR3, $harry_potter, $thor, $inglorious);

// var_dump($movies);

$aragorn = new Actor('Viggo', 'Mortensen');
$gandalf = new Actor('Gino', 'Fastidio');
$LOTR1->addActor($aragorn);
// var_dump($LOTR1);

$LOTR1->addActor($gandalf);
// var_dump($LOTR1);

$LOTR1->removeActor($gandalf);
// var_dump($LOTR1);

$sam = new Actor('Sean', 'Austin');
$LOTR1->addActor($sam);
// var_dump($LOTR1);

$frodo = new Actor('Elijah', 'Wood');
$legolas = new Actor('Orlando', 'Bloom');
$LOTR1->addActor($frodo, $legolas);
$LOTR2->addActor($legolas, $frodo, $aragorn, $sam);
$LOTR3->addActor($legolas, $frodo, $aragorn, $sam);

?>

<!doctype html>
<html lang='it'>

<head>

    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Style -->
    <link rel='stylesheet' href='style/app.css'>

    <title>OOP Movies</title>

</head>

<body>
    <div class="container">
        <h1>OOP Movies</h1>
        <div class="grid">
            <?php
            foreach ($movies as $movie) {
            ?>
                <div class="col-grid">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?= $movie->img ?>" alt="">
                        </div>
                        <div class="card-body">
                            <h3>
                                <?= $movie->name ?>
                            </h3>
                            <?php
                            if ($movie->genres) {
                            ?>
                                <p>
                                    <strong>Genere:</strong>
                                    <?php
                                    foreach ($movie->genres as $key => $genre) {
                                        if ($key == count($movie->genres) - 1)
                                            echo "$genre.";
                                        else
                                            echo "$genre, ";
                                    }
                                    ?>
                                </p>
                            <?php
                            }
                            ?>

                            <?php
                            if ($movie->year) {
                            ?>
                                <p>
                                    <strong>Anno di uscita:</strong>
                                    <?=
                                    $movie->year;
                                    ?>
                                </p>
                            <?php
                            }
                            ?>

                            <?php
                            if ($movie->cast) {
                            ?>
                                <p>
                                    <strong>Cast:</strong>
                                    <?php
                                    foreach ($movie->cast as $key => $actor) {
                                        if ($key == count($movie->cast) - 1)
                                            echo "$actor...";
                                        else
                                            echo "$actor, ";
                                    }
                                    ?>
                                </p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>

</body>

</html>