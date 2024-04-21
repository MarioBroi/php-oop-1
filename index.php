<?php
require_once __DIR__ . '/db.php';

?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Movies dispense</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div id='app'>

        <header class="app-header">
            <div class="logo">
                Movies dispense
            </div>
            <!-- /.logo -->
        </header>
        <!-- /.app-header -->

        <main class="app-main">
            <div class="container my-4">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-3 g-4">

                    <?php foreach ($tvShows as $tvShow) : ?>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?= $tvShow->getTitle() ?> (tv)</h5>
                                    <p class="card-text"><strong>Genere: </strong><?= $tvShow->genre?->first; ?> / <?= $tvShow->genre?->second; ?></p>

                                    <p class="card-text"><strong>Language: </strong><?= $tvShow->getLenguage() ?></p>
                                    <p class="card-text"><strong>Rating: </strong><?= $tvShow->getVote() ?>/10</p>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <p><strong>Seasons: </strong><?= $tvShow->getSeasons() ?></p>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                    <?php endforeach ?>

                    <?php foreach ($movies as $movie) : ?>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?= $movie->getTitle() ?> (movie)</h5>
                                    <p class="card-text"><strong>Genere: </strong><?= $movie->genre?->first; ?> / <?= $movie->genre?->second; ?></p>
                                    <p class="card-text"><strong>Durate: </strong><?= $movie->getTime() ?></p>
                                    <p class="card-text"><strong>Language: </strong><?= $movie->getLenguage() ?></p>
                                    <p class="card-text"><strong>Rating: </strong><?= $movie->getVote() ?>/10</p>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <p><strong>Profit: </strong><?= $movie->getProfit() ?></p>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                    <?php endforeach ?>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </main>
        <!-- /.app-main -->

    </div>
    <!-- /.app -->

</body>

</html>