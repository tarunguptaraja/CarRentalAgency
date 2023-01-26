<?php
include '../connection.php';

$showAlert = false;
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available cars</title>
    <link rel="stylesheet" href="customer/cust.css">
    <link rel="stylesheet" href="agency.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="body">

    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right: 20px ;">
                <a href="../index.php"> <img src="../images/logo.jpg" class="logo" width="110px"></img></a>
                </li>
            </ul>
            <h3 class="text-center" style="color: black;">View Booked Cars</h3>
            <a class="text-light btn btn-primary" style="margin-left:20px;" href="../index.php">LOGOUT</a>

        </div>
    </nav>

    
    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            <?php

            $sql = 'SELECT * FROM bookedcars';
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $username = $row['username'];
                $slno = $row['slno'];
                $model = $row['model'];
                $number = $row['number'];
                $seat = $row['seat'];
                $rent = $row['rent'];
                $days = $row['days'];
                $date = $row['date'];

                echo '
                <div class="col-sm-4">
                <figure class="figure" style="background-color: #ffffff; padding: 50px;">
                    <figcaption class="figure-caption">
            
                        <div class="row" style=" margin: 20px;">
                                <div class="col"><b>Vehicle Model</b></div>
                                <div class="col">' . $username . '</div>
                            </div>
                            <div class="row" style=" margin: 20px;">
                                <div class="col"><b>Vehicle Model</b></div>
                                <div class="col">' . $model . '</div>
                            </div>
                            <div class="row" style=" margin: 20px;">
                                <div class="col"><b>Vehicle Number</b></div>
                                <div class="col">' . $number . '</div>
                            </div>
                            <div class="row" style=" margin: 20px;">
                                <div class="col"><b>Seating Capacity</b></div>
                               <div class="col">' . $seat . '</div>
                            </div>
                            <div class="row" style=" margin: 20px;">
                                <div class="col"><b>Rent Per Day </b></div>
                               <div class="col">' . $rent . '</div>

                            </div>
                            <div class="row" style=" margin: 20px;">
                                <div class="col"><b>Number of Days </b></div>
                               <div class="col">' . $days . '</div>

                            </div>
                            <div class="row" style=" margin: 20px;">
                                <div class="col"><b>Start Date </b></div>
                               <div class="col">' . $date . '</div>

                            </div>
                            
                    </figcaption>
                </figure>
            </div>
                ';
            }

            ?>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>