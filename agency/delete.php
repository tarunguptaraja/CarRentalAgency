<?php
include '../connection.php';
if (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];
    $sql = "DELETE FROM cars WHERE slno=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:addNewCars.php");
    } else {
        die(mysqli_error($conn));
    }
}
