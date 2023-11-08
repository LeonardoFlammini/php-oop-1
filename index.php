<?php


require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/SerieTv.php';
require_once __DIR__ . '/Model/Media.php';
require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>

  <title>php-oop-1</title>
</head>
<body>
  <main>
    
    <div class="container my-5">
      
      <h1 class="my-3 text-center my-3">Films</h1>
      
      <div class="row row-cols-4 justify-content-around">
        <?php foreach ($movies as $movie):?>
          <div class="card" style="width: 18rem;">
            <img src="img/<?php echo $movie->poster->file_name ?>" class="card-img-top" alt="...">
            <!-- TODO: fare controllo all'immagine e scrivere l'alt -->
            <div class="card-body">
              <h5 class="card-title"><?php echo $movie->name ?></h5>
              <p class="card-text"><?php echo $movie->date ?></p>
              <p class="card-text"><?php echo $movie->getGenres() ?></p>
            </div>
          </div>
        <?php endforeach ?>
      </div>

      <h1 class="my-3 text-center my-3">Series</h1>

      <div class="row row-cols-4 justify-content-around my-3">
        <?php foreach ($series as $serie):?>
          <div class="card" style="width: 18rem;">
            <img src="img/<?php echo $serie->poster->file_name ?>" class="card-img-top" alt="...">
            <!-- TODO: fare controllo all'immagine e scrivere l'alt -->
            <div class="card-body">
              <h5 class="card-title"><?php echo $serie->name ?></h5>
              <p class="card-text"><?php echo $serie->date ?></p>
              <p class="card-text"><?php echo $serie->getGenres() ?></p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      
    </div>
  </main>
</body>
</html>