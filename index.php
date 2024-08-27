<?php
ini_set("display_errors", 1);
session_start();
$_SESSION['adminName'] = "admin";
$_SESSION["adminpwd"] = "admin@1155";

$_SESSION['clientname'] = 'user';
$_SESSION['clientpwd'] = 'user@1155';

$message = '';


if(isset($_POST['login'])) {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        if ($_POST['username'] === $_SESSION['adminName'] && $_POST['password'] === $_SESSION['adminpwd']) {
            header("Location:./admin/index.php");
        } elseif ($_POST['username'] === $_SESSION['clientname'] && $_POST['password'] === $_SESSION['clientpwd']) {
            header("Location:./user/index.php");
        }  else {
            $message = "Invalid username or password!";
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<?php require_once("./layout/header.php") ?>

<body class="d-flex w-100 justify-content-center align-items-center" style="height:100vh">

    <div class="container mx-auto text-center">
        <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Login</button>

        <?php echo "<p class='text-danger mt-3'>" . $message . "</p>" ?>




        
    </div>

    <form action="" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body">

                        <div class="d-flex flex-column justify-content-around " style="height:150px">
                            <div>
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="input username">


                            </div>

                            <div>
                                <label for="password ">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="input password">


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="login" id="loginbtn">Submit</button>

                    </div>

                </div>
            </div>
        </div>


    </form>



    <?php require_once("./layout/footer.php") ?>
</body>

</html>