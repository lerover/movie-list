<?php foreach ($movie_lists as $movies) {
                foreach ($movies as $movie) { ?>
                    <tr>
                        <td><img src="<?php echo $movie['poster'] ?>" alt="movie poster"></td>
                        <td><?php echo $movie['title'] ?></td>
                        <td><?php echo $movie['year'] ?></td>
                        <td><?php echo $movie['type'] ?></td>
                        <td><?php echo $movie['created_at'] ?></td>

                        <td>
                            <a class="btn btn-warning btn-xs" href="?id=<?php echo $movie['id']; ?>">Edit</a>
                            <a class="btn btn-error btn-xs" href="?id=<?php echo $movie['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php }
            }

            ; ?>