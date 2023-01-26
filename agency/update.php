<?php
$add = false;
include '../connection.php';
$id = $_GET["updateId"];
$sql = "SELECT * FROM cars WHERE slno=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$model = $row['model'];
$number = $row['number'];
$seat = $row['seat'];
$rent = $row['rent'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $modelF = $_POST['model'];
    $numberF = $_POST['number'];
    $seatF = $_POST['seat'];
    $rentF = $_POST['rent'];
    $sql = "UPDATE cars SET slno=$id,model='$modelF', number ='$numberF', seat= $seatF, rent=$rentF WHERE slno=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // $add = true;
        header("location:adNewCars.php");
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
    <title>Update Car</title>
    <link rel="stylesheet" href="agency.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="body">

    <div class="container" style="width: 1000px ;">
        <div class="card text-center"style="width: 1000px ;">

            <div class="card-body">
                <h5 class="card-title">Update vehicle Form</h5>
                <form method="POST">
                    <div class="form-group row">
                        <label for="model" class="col-sm-2 col-form-label">Vehicle Model</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="model" placeholder="Modal name" name="model" value=<?php
                                                                                                                            echo $model; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="number" class="col-sm-2 col-form-label">Vehicle Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="number" placeholder="Vehicle Number" name="number" value=<?php
                                                                                                                                    echo $number; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="seat" class="col-sm-2 col-form-label">Seating Capacity</label>
                        <div class="col-sm-10">
                            <input type="seat" class="form-control" id="seat" placeholder="Seating capacity" name="seat" value=<?php
                                                                                                                                echo $seat; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rent" class="col-sm-2 col-form-label">Rent Money(Per day)</label>
                        <div class="col-sm-10">
                            <input type="rent" class="form-control" id="rent" placeholder="Rent to pay" name="rent" value=<?php
                                                                                                                            echo $rent; ?>>
                        </div>
                    </div>
                    <div class="row mb-2 text-center">
                        <button type="submit" class="btn btn-primary">UPDATE</button>
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