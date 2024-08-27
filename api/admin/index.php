<?php
ini_set("display_errors", 1);
session_start();
require_once("./partial/header.php");
require_once("./partial/navbar.php");

$movie_list = [];
if (isset($_SESSION["movie-list"])) {
  $movie_list = $_SESSION["movie-list"];
}
// ?>

<div class="overflow-x-auto mt-10">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>

                <th>Poster</th>
                <th>Title</th>
                <th>Year</th>
                <th>Type</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>





        <?php foreach($movie_list as $movie) { ?>
                   
                     <tr>
      <td>
        <img src="<?php echo $movie['poster'] ?>" width="50" />
      </td>
      <td><?php echo $movie['title']; ?></td>
      <td><?php echo $movie['year']; ?></td>
      <td><?php echo $movie['type']; ?></td>
      <td><?php echo $movie['created_at']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $movie['id']; ?>" class="btn btn-success btn-xs">Edit</a>
        <a href="delete.php?id=<?php echo $movie['id']; ?>" class="btn btn-error btn-xs">Delete</a>
      </td>
    </tr>
                <?php
            }

            ; ?>

        </tbody>

        <tfoot>
            <tr>

                <th>Poster</th>
                <th>Title</th>
                <th>Year</th>
                <th>Type</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>



<?php include_once('./partial/footer.php'); ?>