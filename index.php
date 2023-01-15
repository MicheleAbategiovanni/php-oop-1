<?php

require_once "./classes/Movie.php";

$voteInput = isset($_GET["_vote"]) ? $_GET["_vote"] : '';

$movie_1 = new Movie("Pippi e i Funghi Dell'Est", "Fantasy", "Curcumo", $voteInput);

// echo '<pre>', var_dump($movie_1), '</pre>';

$movie_2 = new Movie("Pippi ed il regno degli Dei", "Sci-Fi", "Tungsten", $voteInput);

// echo '<pre>', var_dump($movie_2), '</pre>';

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPPs</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-secondary ">

    <div id="app">
        <header>

            <h1 class="border rounded-3">OPPs</h1>

        </header>


        <main>

            <section>
                <div class="container py-3">
                    <h3>Lista film:</h3>

                    <div class="row row-cols-3 py-5 justify-content-around">
                        <div class="col border rounded-3">

                            <h5 class="border-bottom">Titolo: <?php echo $movie_1->getName() ?> </h5>
                            <h5 class="border-bottom">Genere: <?php echo $movie_1->getGenre() ?> </h5>
                            <h5 >Lingua: <?php echo $movie_1->getLanguage() ?> </h5>

                        </div>


                        <div class="col border rounded-3">

                            <h5 class="border-bottom">Titolo: <?php echo $movie_2->getName() ?> </h5>
                            <h5 class="border-bottom">Genere: <?php echo $movie_2->getGenre() ?> </h5>
                            <h5>Lingua: <?php echo $movie_2->getLanguage() ?> </h5>

                        </div>
                    </div>
                </div>
            </section>


            <form method="get">
                <div class="container py-5 text-center">

                    <h2 class="">Scrivi un voto da 1 a 5...</h2>

                    <div class="input-group">
                        <input type="number" class="form-control" name="_vote">
                    </div>

                </div>


                <div class="container text-center">

                    <h2>Le tue recensioni:</h2>

                    <h4>Voto: <?php echo $movie_1->getVote() ?> </h4>
                </div>
            </form>
        </main>


    </div>
    <script src="js/main.js"></script>

</body>

</html>