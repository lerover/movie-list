<?php
session_start();
include_once("partial/header.php"); 
        require_once("./partial/navbar.php");
?>



<!-- <a href="index.php" class="btn btn-outline-secondary my-2">Back to Listing</a> -->

<?php
  
  

  $error_message = '';
  $success_message = '';
  $display = 'none';

  $id = $_GET["id"];

  $data = null;
  $movie_list = [];
  if (isset($_SESSION["movie-list"])) {
    $movie_list = $_SESSION["movie-list"];
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['title']) && !empty($_POST['year']) && !empty($_POST['type'])) {
      
      $title = $_POST['title'];
      $year = $_POST['year'];
      $type = $_POST['type'];

      $file = $_FILES['poster'];

      $upload_file = './images/' . $file['name'];

      move_uploaded_file(
        $file['tmp_name'],
        $upload_file,
      );

      foreach ($movie_list as $index => $movie) {
        if ($movie['id'] == $id) {
          $movie['title'] = $title;
          $movie['year'] = $year;
          $movie['type'] = $type;
          $movie["poster"] = $upload_file;

          $movie_list[$index] = $movie;
          $_SESSION["movie-list"] = $movie_list;
          break;
        }
      }

      // header('Location: index.php');
      // exit;
    
      $display = 'flex';
    }
    
  }
  // find item by id
  foreach ($movie_list as $index => $movie) {
    if ($movie['id'] == $id) {
      $data = $movie;
      break;
    }
  }

?>



<div class="w-screen p-10">
    <div role="alert" class="alert alert-success mb-5 text-white" style="display:<?php echo $display;  ?>">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Successfully updated</span>
    </div>

    <form action="" method="post" enctype="multipart/form-data">

        <label for="title">Title</label>
        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-1/2 mb-5" id="title"
            name="title" value="<?= $data['title'] ?>"/>

        <label for="year">Year</label>
        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-1/2 mb-5" id="year"
            name="year" value="<?= $data['year'] ?>"/>

        <label for="type">Type</label>
        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-1/2 mb-5" id="type"
            name="type" value="<?= $data['type'] ?>"/>

        <label for="poster">Poster</label>
        <br />
        <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" id="poster" name="poster" />
        <img src="<?= $data['poster'] ?>" width="150"/>
        <br />

        <button class="btn btn-outline" type="submit" name="submit" value="Update">Update</button>
    </form>
</div>

<?php include_once("partial/footer.php"); ?>