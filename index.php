<?php
require_once __DIR__ . '/Models/Production.php';
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
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Movie name: <?= $dune->title ?></div>
                                <div class="card-text">Lenguage: <?= $dune->lenguage ?></div>
                                <span>Vote: <?= $dune->vote ?></span>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Movie name: <?= $fury->title ?></div>
                                <div class="card-text">Lenguage: <?= $fury->lenguage ?></div>
                                <span>Vote: <?= $fury->vote ?></span>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Movie name: <?= $avatar->title ?></div>
                                <div class="card-text">Lenguage: <?= $avatar->lenguage ?></div>
                                <span>Vote: <?= $avatar->vote ?></span>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
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