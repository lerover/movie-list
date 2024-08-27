<?php
ini_set("display_errors", 1);
session_start();
require_once("./partial/header.php");
require_once("./partial/navbar.php");


$display = 'none';


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

    $movie = [
      "id" => time(),
      "title" => $title,
      "year" => $year,
      "type" => $type,
      "poster" => $upload_file,
      "created_at" => date("Y-m-d h:iA"),
    ];

    $_SESSION['movie-list'][] = $movie;

    $success_message = "Record created successfully!";
  
    $display = 'flex';}
  else {
    $error_message = "All fields are required!";
  }

  
}
;

?>


<div class="w-screen p-10">
    <div role="alert" class="alert alert-success mb-5 text-white" style="display:<?php echo $display;  ?>">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Successfully created</span>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="p" value="created" style="display: none;">

        <label for="title">Title</label>
        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-1/2 mb-5" id="title"
            name="title" />

        <label for="year">Year</label>
        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-1/2 mb-5" id="year"
            name="year" />

        <label for="type">Type</label>
        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-1/2 mb-5" id="type"
            name="type" />

        <label for="poster">Poster</label>
        <br />
        <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" id="poster" name="poster" />
        <br />

        <button class="btn btn-outline" type="submit" name="confirmbtn">Confirm</button>
    </form>
</div>


<?php include_once('./partial/footer.php'); ?>