<?php
$add = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include '../connection.php';
    $model = $_POST['model'];
    $number = $_POST['number'];
    $seat = $_POST['seat'];
    $rent = $_POST['rent'];
    $sql = "INSERT INTO cars(model,number,seat,rent) VALUES ('$model','$number','$seat','$rent')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $add = true;
    } else {
        echo "Error" . mysqli_error($conn);
    }

    header("location: addNewCars.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Car</title>
    <link rel="stylesheet" href="agency.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="body">
    <nav class="navbar fixed-top navbar-expand-md">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right: 20px ;">
                <a href="../index.php"> <img src="../images/logo.jpg" class="logo" width="110px"></img></a>
                </li>
                <li class="nav-item" style="margin-top: 12px;">
                    <a href="viewBookedCars.php" style="color: #000000; font-size:medium;">View Booked Cars</a>
                </li>

            </ul>
            
            <a class="text-light btn btn-primary" style="margin-left:20px;" href="../index.php">LOGOUT</a>
        </div>

    </div>

    </nav>
    <div class="mainContainer">
        <div class="container" style="width: 1100px ; padding-top:100px;">
            <div class="card text-center"style="width: 1100px ;">
                <h2 class="card-title">Add New Car</h2>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group row">
                            <label for="model" class="col-sm-2 col-form-label">Vehicle Model</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="model" placeholder="Modal name" name="model" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="number" class="col-sm-2 col-form-label">Vehicle Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="number" placeholder="Vehicle Number" name="number" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="seat" class="col-sm-2 col-form-label">Seating Capacity</label>
                            <div class="col-sm-10">
                                <input type="seat" class="form-control" id="seat" placeholder="Seating capacity" name="seat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rent" class="col-sm-2 col-form-label">Rent Money(Per day)</label>
                            <div class="col-sm-10">
                                <input type="rent" class="form-control" id="rent" placeholder="Rent to pay" name="rent" required>
                            </div>
                        </div>
                        <div class="row mb-2 text-center">
                            <button type="submit" class="btn btn-primary">ADD</button>
                        </div>
                        <div class="row  text-center">
                            
                        </div>

                    </form>

                </div>

            </div>
        </div>

        <div class="container2 " style="padding-bottom: 500px;">
            <h3 class="text-center" style="padding:20px; color:white">Available Cars </h3>
            <table class="table table-dark">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Vehicle Model</th>
                        <th scope="col">Vehicle Number</th>
                        <th scope="col">Seat Capacity</th>
                        <th scope="col">Rent per Day</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>


                    <?php
                    include '../connection.php';
                    $sqlForView = "SELECT * FROM cars";
                    $result2 = mysqli_query($conn, $sqlForView);
                    while ($row = mysqli_fetch_assoc($result2)) {
                        echo ' <tr>
                        <td>' . $row["slno"] . '</td>
                <td>' . $row["model"] . '</td>
                <td>' . $row["number"] . '</td>
                <td>' . $row["seat"] . '</td>
                <td>' . $row["rent"] . '</td>
                <td><button class="btn btn-primary"><a href="update.php?updateId=' . $row["slno"] . ' " class="text-light">Update</a> </button>
                <button class="btn btn-danger"><a href="delete.php?deleteId=' . $row["slno"] . '" class="text-light">Delete</a>  </button></td>
                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </div>
</body>

</html>