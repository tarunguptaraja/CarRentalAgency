<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "carrentalagency";

$conn = new mysqli($servername,$username,$password,$database);

if(!$conn)
{
    die('Sorry failed to connect to the Database! Please try again!'. mysqli_connect_error());
}
