<?php
session_start();
$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include '../connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customers WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: carsBooked.php");
    } else {
        $showError = "Invalid!";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <link rel="stylesheet" href="cust.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="body">
    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error!</strong> You should check in on some of those fields below or passwords do not match!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }

    ?>
    <div class="container">
        <div class="card text-center">
            <div class="card-header"style="width:700px;">
                Login Here!
            </div>
            <div class="card-body">
                <h5 class="card-title"> Customer Login </h5>
                <form method="POST">

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div>
                    </div>

                    <div class="row mb-2 text-center">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>