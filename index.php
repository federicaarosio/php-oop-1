<?php

include_once __DIR__ . '/models/Movie.php';

$movie1 = new Movie('Stand by me', 'drama', 'Rob Reiner', '"Stand by Me" is a coming-of-age film based on Stephen King\'s novella. Set in the 1950s, it follows four boys on a journey to find the body of a missing boy, exploring themes of friendship, adventure, and the challenges of adolescence');

$movie2 = new Movie('Little Women', 'drama', 'Greta Gerwig', 'In Greta Gerwig\'s adaptation of "Little Women," the four March sisters—Jo, Meg, Amy, and Beth—navigate the challenges of womanhood and pursue their individual dreams against the backdrop of the American Civil War. The film\'s interwoven narrative provides a refreshing contemporary perspective on Louisa May Alcott\'s beloved literary classic.');

$movie3 = new Movie('Le otto montagne', 'drama', 'Felix Van Groeningen', 'In the film adaptation of Paolo Cognetti\'s "Le otto montagne" ("The Eight Mountains"), the story unfolds around the complex friendship between two boys, Pietro and Bruno, who come from different worlds but find solace and understanding in the mountains of the Italian Alps. The narrative explores themes of nature, identity, and the enduring impact of personal connections.');

$movie4 = new Movie('Invictus', 'biography', 'Clint Eastwood', '"In Invictus," directed by Clint Eastwood, Nelson Mandela, portrayed by Morgan Freeman, uses the South African rugby team, captained by Francois Pienaar (Matt Damon), as a unifying force to help bridge racial divides in post-apartheid South Africa during the 1995 Rugby World Cup. The film portrays Mandela\'s strategic leadership and the team\'s inspiring journey to unite a nation through the universal language of sports.');


$moviesList = [$movie1, $movie2, $movie3, $movie4];
// var_dump($moviesList);

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
                        <h5 class="card-title"><?php echo $movie->title ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">A movie by: <?php echo $movie->director?>
                        </h6>
                        <p class="card-text"><?php echo $movie->synopsis ?></p>
                        <p class="card-text">Genre: <?php echo $movie->genre ?></p>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </main>
</body>

</html>