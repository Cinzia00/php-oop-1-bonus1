<?php
require_once __DIR__ ."/models/Movie.php";

$movie1 = new Movie("Nope", 100);
$movie1->lingua = "Inglese";
$movie1->annoDiUscita = 2022;
$movie1->trama = " Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$movie1->calcolaAnniUscita();
$movie1->genere = ["Horror", ",", "avventura"];
// var_dump($movie1);


$movie2 = new Movie("Nemo", "90");
$movie2-> annoDiUscita = 2003;
$movie2->trama = " Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$movie2->genere = ["Avventura", ",", "animazione", ",", "musicale"];
// var_dump($movie2);


$movie3 = new Movie("All right", 160);
$movie3->lingua = "Inglese";
$movie3->annoDiUscita = 2013;
$movie3->trama = " Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$movie3->calcolaAnniUscita();
$movie3->genere = ["Drammatico", ",", "avventura"];


$movie4 = new Movie("Il trono di spade", 300);
$movie4->lingua = "Inglese";
$movie4->annoDiUscita = 2010;
$movie4->trama = " Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$movie4->calcolaAnniUscita();
$movie4->genere = ["rammatico", ",", "fantasy"];


$movie5 = new Movie("Alla ricerca di Dory", 103);
$movie5->lingua = "Inglese";
$movie5->annoDiUscita = 2016;
$movie5->trama = " Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$movie5->calcolaAnniUscita();
$movie5->genere = ["Animazione"];


$movie6 = new Movie("Perfect Addiction", 120);
$movie6->lingua = "Francese";
$movie6->annoDiUscita = 2015;
$movie6->trama = " Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$movie6->calcolaAnniUscita();
$movie6->genere = ["Drammatico"];


$movie7 = new Movie("L'immaginazione", 125);
$movie7->lingua = "Francese";
$movie7->annoDiUscita = 2004;
$movie7->trama = " Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$movie7->calcolaAnniUscita();
$movie7->genere = ["Avventura"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <style>
        body {
            background-image:url(./sfondo.avif);
        }
    </style>
    <main>
    </style>
        <h1 class="text-center py-5">Film</h1>
        <div class="container py-5">
            <div class="card">
             <div class="card-body">
                <h5 class="card-title"><?php echo $movie1->titolo?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Anno uscita: <?php echo $movie1->annoDiUscita?></h6>
                <p class="card-text text-body-secondary">Durata: <?php echo $movie1->durata?> minuti</p>
                <p class="card-text"><?php echo $movie1->trama?></p>
                <div>Genere: <?php  
                for ($i=0; $i < count($movie1->genere); $i++) {
                    ?>
                    <span>
                        <?php
                        echo $movie1->genere[$i];
                        ?>
                    </span>
                <?php
                }
                ?>
             </div>
            </div>
            <div class="card">
             <div class="card-body">
                <h5 class="card-title"><?php echo $movie2->titolo?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Anno uscita: <?php echo $movie2->annoDiUscita?></h6>
                <p class="card-text text-body-secondary">Durata: <?php echo $movie2->durata?> minuti</p>
                <p class="card-text"><?php echo $movie2->trama?></p>
                <div>Genere: <?php  
                for ($i=0; $i < count($movie2->genere); $i++) {
                    ?>
                    <span>
                        <?php
                        echo $movie2->genere[$i];
                        ?>
                    </span>
                <?php
                }
                ?>
                </div>
            </div>
            <div class="card" >
             <div class="card-body">
                <h5 class="card-title"><?php echo $movie3->titolo?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Anno uscita: <?php echo $movie3->annoDiUscita?></h6>
                <p class="card-subtitle mb-2 text-body-secondary">Durata: <?php echo $movie3->durata?> minuti</p>
                <p class="card-text"><?php echo $movie3->trama?></p>
                <div>Genere: <?php  
                for ($i=0; $i < count($movie3->genere); $i++) {
                    ?>
                    <span>
                        <?php
                        echo $movie3->genere[$i];
                        ?>
                    </span>
                <?php
                }
                ?>
                </div>
            </div>
            <div class="card" >
             <div class="card-body">
                <h5 class="card-title"><?php echo $movie5->titolo?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Anno uscita: <?php echo $movie5->annoDiUscita?></h6>
                <p class="card-subtitle mb-2 text-body-secondary">Durata: <?php echo $movie5->durata?> minuti</p>
                <p class="card-text"><?php echo $movie5->trama?></p>
                <div>Genere: <?php  
                for ($i=0; $i < count($movie5->genere); $i++) {
                    ?>
                    <span>
                        <?php
                        echo $movie5->genere[$i];
                        ?>
                    </span>
                <?php
                }
                ?>
                </div>
            </div>
            <div class="card" >
             <div class="card-body">
                <h5 class="card-title"><?php echo $movie6->titolo?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Anno uscita: <?php echo $movie6->annoDiUscita?></h6>
                <p class="card-subtitle mb-2 text-body-secondary">Durata: <?php echo $movie6->durata?> minuti</p>
                <p class="card-text"><?php echo $movie6->trama?></p>
                <div>Genere: <?php  
                for ($i=0; $i < count($movie6->genere); $i++) {
                    ?>
                    <span>
                        <?php
                        echo $movie6->genere[$i];
                        ?>
                    </span>
                <?php
                }
                ?>
                </div>
            </div>
            <div class="card" >
             <div class="card-body">
                <h5 class="card-title"><?php echo $movie7->titolo?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Anno uscita: <?php echo $movie7->annoDiUscita?></h6>
                <p class="card-subtitle mb-2 text-body-secondary">Durata: <?php echo $movie7->durata?> minuti</p>
                <p class="card-text"><?php echo $movie7->trama?></p>
                <div>Genere: <?php  
                for ($i=0; $i < count($movie7->genere); $i++) {
                    ?>
                    <span>
                        <?php
                        echo $movie7->genere[$i];
                        ?>
                    </span>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN">
</body>
</html>