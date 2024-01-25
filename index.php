<?php

include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-light">
    <main>
        <h1 class="text-center m-3">Movies</h1>
        <div class="container">
            <div class="row">
                <?php foreach ($moviesList as $movie) { ?>

                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $movie->title ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            A movie by: <?php echo $movie->director?>
                            <!-- <?php echo $movie->getMovie()?> -->
                        </h6>
                        <p class="card-text">
                            <strong>Synopsis:</strong>
                            <?php echo $movie->synopsis ?>
                        </p>
                        <p class="card-text">
                            <strong>Genres:</strong>
                            <?php foreach ($movie->listOfGenres as $genre) {echo $genre . " "; } ?>
                        </p>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </main>
</body>

</html>