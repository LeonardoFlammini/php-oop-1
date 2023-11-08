<?php


require_once __DIR__ . '/Model/Movie.php';
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
    <div class="container my-5 d-flex justify-content-around ">
      <?php foreach ($movies as $movie):?>
        <div class="card" style="width: 18rem;">
          <img src="img/<?php echo $movie->poster->file_name ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $movie->name ?></h5>
            <p class="card-text"><?php echo $movie->date ?></p>
            <p class="card-text"><?php echo $movie->getGenres() ?></p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </main>
 
</body>
</html>