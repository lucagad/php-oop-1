<?php

// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.

// La classe può essere definita internamente al file index.php o essere inclusa (soluzione preferibile)

require_once __DIR__ . '/movie.php';


$batman = new Movie ( 1 , 'The Batman' , 'EN' , 'The Batman' , 'US' , '2022-03-03', 'Dal celebre fumetto, le avventurose vicende di Batman, il supereroe che combatte il crimine indossando un costume da pipistrello, mentre è alla costante ricerca dei segreti del suo passato.', 7.5);

$spiderman = new Movie ( 2 , 'Spider-Man: No Way Home' , 'EN' , 'Spider-Man: No Way Home' , 'US' , '2021-12-15', 'L&#39identità dell&#39Uomo Ragno viene rivelata a tutti, e non riesce più a separare la sua vita normale dalla vita da supereroe, e quando chiede aiuto al Dottor Strange, lo costringe a scoprire cosa significa veramente essere l&#39Uomo Ragno.', 4.5);

$movies_db = [$batman,$spiderman];

// var_dump($movies_db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>
<body>

<h1>Lista Film:</h1>

<div class="movie_container">

  <?php foreach ($movies_db as $item => $movie): ?>

  <div class="movie_box">
    <h2>TITOLO: <?php echo $movie->getTitle()?></h2>
    <ul>
      <li>ID: <?php echo $movie->getId()?></li>
      <li>Lingua originale: <?php echo $movie->original_language ?></li>
      <li>Titolo originale: <?php echo $movie->original_title ?></li>
      <li>Nazione: <?php echo $movie->origin_country ?></li>
      <li>Data d'uscita: <?php echo $movie->release_date ?></li>
      <li>Overview: <?php echo $movie->overview ?> </li>
      <li>Voto Medio: <?php echo $movie->vote_average?> </li>
    </ul>
  </div>
  <?php endforeach; ?>

</div>

</body>
</html>