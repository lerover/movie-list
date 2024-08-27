<?php
session_start();
require_once("./partial/header.php");
      require_once("./partial/navbar.php");
?>




<!-- movie lists -->
<div class="container mx-auto mt-3 p-5">
    <div class="grid grid-cols-2 gap-4">

    <?php

    $movie_list = [];
    if (isset($_SESSION["movie-list"])) {
      $movie_list = $_SESSION["movie-list"];
    }

    if (isset($_GET['title'])) {
      $title = $_GET['title'];
      
      $tmp = [];
      foreach($movie_list as $movie) {
        if (str_contains($movie['title'], $title)) {
          $tmp[] = $movie;
        }
      }

      if (count($tmp) > 0) {
        $movie_list = $tmp;
      }
    }
    
    foreach($movie_list as $movie) {
  ?>
        <!-- movie-cards -->
        <div class="card card-side bg-base-100 shadow-xl">
            <figure class='w-2/5 h-full'>
                <img src="../admin/<?= $movie['poster'] ?>" alt="Movie" class="object-cover w-96" />
            </figure>
            <div class="card-body flex flex-column justify-around">
                <h2 class="card-title"><?= $movie['title'] ?></h2>
                Year: <?= $movie['year'] ?> |
                Type: <?= $movie['type'] ?>
                <div class="card-actions flex">
                    <button class="btn btn-outline btn-warning btn-sm">Watch Now</button>
                    <button class="btn btn-outline btn-sm">Download</button>

                </div>
            </div>
        </div>
        <?php }; ?>

    </div>
</div>

<?php include_once('./partial/footer.php'); ?>