<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Home Page</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="body">
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid">


            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right: 30px; margin-left: 20px;">
                <a href="index.php"> <img src="images/logo.jpg" class="logo" width="110px"></img></a>
                </li>
                <li class="nav-item" style="margin-top: 12px;" >
                    <a href="carsAvail.php" style="color: #000000; font-size:medium;">Available Cars</a>
                </li>

            </ul>


        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center"style="width:250px;">
                    <img src="images/cust.png" class="card-img-top cardImg" alt="Customer Logo">
                    <div class="card-body">
                        <h5 class="card-title">Customer</h5>
                        <a href="customer/custLogin.php" class="btn btn-primary customMargin">LOGIN</a>
                        <p class="card-text">New Here? <a href="customer/custRegistration.php">Register!</a> </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center"style="width:250px; margin-left:50px;">
                    <img src="images/agency.png" class="card-img-top cardImg" alt="Admin Logo">
                    <div class="card-body ">
                        <h5 class="card-title">Car Agency</h5>
                        <a href="agency/agencyLogin.php" class="btn btn-primary customMargin">LOGIN</a>
                        <p class="card-text">New Here? <a href="agency/agencyRegistration.php">Register!</a> </p>

                    </div>
                </div>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>