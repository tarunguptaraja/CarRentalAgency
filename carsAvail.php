<?php
include 'connection.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("location:customer/custLogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available cars</title>
    <link rel="stylesheet" href="index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="body">
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right: 20px ;">
                <a href="index.php"> <img src="images/logo.jpg" class="logo" width="110px"></img></a>
                </li>
            </ul>
            <h3> Available Cars </h3>

        </div>
    </nav>


    <div class="container">

        <div class="row">
            <?php

            $sql = 'SELECT * FROM cars';
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $slno = $row['slno'];
                $model = $row['model'];
                $number = $row['number'];
                $seat = $row['seat'];
                $rent = $row['rent'];

                echo '
                <div class="col-sm-4">
                <figure class="figure" style="background-color: #ffffff; padding: 50px;">
                    <figcaption class="figure-caption">
                        <form method="post">
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
                                <div class="col">
                                    <b>Number of Days</b>
                                </div>
                                <div class="col"><select id="inputState">
                                        <option selected>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                    </select></div>
                            </div>
                            <div class="row" style=" margin: 20px;">
                            <div class="col">
                            <b>Select the Start Date</b>
                        </div>
                        <div class="col">
                        <input type="date" id="date" name="date">
                        </div>
                            <div class="text-center" style=" margin-top: 25px; margin-left: -8px;">
                                <div class="col"><button class="btn btn-primary" type="submit">Rent Car</button></div>
                            </div>
                        </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>