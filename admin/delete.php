<?php
  session_start();

  $id = $_GET["id"];

  
  if (isset($_SESSION["movie-list"])) {
    $movie_list = $_SESSION["movie-list"];
    // remove from array by id
    foreach ($movie_list as $index => $movie) {
      if ($movie['id'] == $id) {
        unset($movie_list[$index]);

        $_SESSION["movie-list"] = $movie_list;
        break;
      }
    }

    header("Location: index.php");
  }