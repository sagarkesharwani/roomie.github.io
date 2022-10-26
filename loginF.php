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
    <!-- <link rel="stylesheet" href="images/style_LOGIN.css"> -->
    <style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }
    </style>
</head>


<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-red-green bg-light">
        <a class="navbar-brand" href="signup.php">PETIFY </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="AdminLogin.php">Admin</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="signupf.php">SIGN UP</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Loginf.php">LOGIN</a>
                </li>


            </ul>

        </div>
    </nav>
    <section class="h-50 bg-dark">
        <div class="container py-2 h-50">
            <marquee behaviour="alternate" class="h3 text-white">
                <cite title="Source Title">Finding Room?</cite>
            </marquee>
            <div class="row d-flex justify-content-center align-items-center h-50">
                <form action="registerb.php" class="LG" method="POST">
                    <div class="col">
                        <div class="card card-registration my-2">
                            <div class="row g-0">
                                <div class="col-lg-5 m-3 d-none d-xl-block">
                                    <img src="./images/pics/michael-oxendine-GHCVUtBECuY-unsplash.jpg"
                                        alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black ">
                                        <h3 class="mb-3 text-center text-uppercase">Registration form</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="text" id="form3Example8"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Address</label>
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-2 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="femaleGender" value="option1" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="maleGender" value="option2" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="otherGender" value="option3" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>

                                        </div>
                                        <div class="form-outline mb-2">
                                            <input type="number" name="mobile" id="form3Example8"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Mobile No</label>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="date" name="dob" id="form3Example9"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example9">DOB</label>
                                        </div>
                                        <div class="form-outline mb-2">
                                            <input type="text" name="emailid" id="form3Example97"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example97">Email ID</label>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-outline">
                                                    <input type="password" name="password" id="form3Example1m"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m"> Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-outline">
                                                    <input type="password" name="password2" id="form3Example1n"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Re-enter
                                                        Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="button" class="btn btn-light btn-lg mx-3">Reset all</button>
                                            <button type="submit" name="signup"
                                                class="btn btn-warning btn-lg ms-2">Submit
                                                form</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        </div>
    </section>

    <!-- 
    <div id="login-box">
        <div class="login-left">

            <h1>Login</h1>

            <form action="login_checkb.php" class="LG" method="POST">
                <span><input class="form-control" type="text" name="username" placeholder="Enter Username"
                        required></span>


                <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                <div class="container">
                    <input class="btn btn-success" type="submit" name="login" value="LOGIN">
                    <a href="signupf.php"><input class="btn btn-success signup" name="signup" value="SIGNUP"></a>
                </div>
            </form>


        </div>
        <div class="login-right">

            <span class="signin"> Social Network </span>

            <button class="social facebook" href="https://www.facebook.com/">Log in with Facebook</button>
            <button class="social Google" href="">Log in with Google</button>

        </div>
    </div> -->
    <!-- <footer>
        <p class="p-2 bg-dark text-white text-center ">@PETIFY@</p>
    </footer> -->