<?php
Session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <titile> </titile>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="images/style.css">
</head>


<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
        <a class="navbar-brand" href="signup.php">PETIFY </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link" href="Adminlogin.php">LOGIN</a>
                </li>


            </ul>

        </div>
    </nav>


    <div id="login-box">
        <div class="login-left">
            <h2 style="color:white;">Admin Register </h2>
            <form action="admin_registerb.php" method="POST">
                <input class="form-control" type="text" name="username" placeholder="Enter Username" required>
                <input class="form-control" type="email" id="email" name="emailid" placeholder="Enter E-mail id"
                    required>
                <input class="form-control" type="text" name="mobile" placeholder="Enter mobile no" required>
                <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                <input class="form-control" type="password" name="password2" placeholder="Confirm Password" required>

                <input class="btn btn-danger" type="submit" name="signup" value="Register">
            </form>
        </div>
        <!-- <div class="login-right">


        </div> -->
    </div>
    <footer>
        <p class="p-2 bg-dark text-white text-center ">@PETIFY@</p>
    </footer>