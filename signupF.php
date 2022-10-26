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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
    </style>
    <!-- <link rel="stylesheet" href="images/style.css"> -->
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
                    <a class="nav-link" href="signupf.php">SIGN UP</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="loginf.php">LOGIN</a>
                </li>


            </ul>

        </div>
    </nav>
    <section class="vh-100">
        <form action="login_checkb.php" method="POST">
            <div class="container-fluid h-custom py-2">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="./images/pics/kara-eads-L7EwHkq1B2s-unsplash.jpg" class="img-fluid"
                            alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form action="login_checkb.php" method="POST">
                            <div
                                class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </button>
                            </div>

                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0">Or</p>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="username" id="form3Example3"
                                    class="form-control form-control-lg" placeholder="Enter a valid email address" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input type="password" name="password" id="form3Example4"
                                    class="form-control form-control-lg" placeholder="Enter password" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#!" class="text-body">Forgot password?</a>
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" name="    " class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                        class="link-danger">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div
                class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                <!-- Copyright -->
                <div class="text-white mb-3 mb-md-0">
                    Copyright © 2020. All rights reserved.
                </div>
                <!-- Copyright -->

                <!-- Right -->
                <div>
                    <a href="#!" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#!" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#!" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#!" class="text-white">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <!-- Right -->
            </div>
    </section>
    <!-- 
    <div id="login-box">
        <div class="login-left">
            <h1>Sign up</h1>
            <form action="registerb.php" method="POST">
            <input class="form-control" type="text" name="username" placeholder="Enter Username" required>
            <input class="form-control" type="email" id="email" name="emailid" placeholder="Enter E-mail id" required>
            <input class="form-control" type="text"   name="mobile" placeholder="Enter mobile no" required>
            <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
            <input class="form-control" type="password" name="password2" placeholder="Confirm Password" required>

            <input class="btn btn-danger" type="submit" name="signup" value="SIGNUP">
            </form>
        </div>
        <div  class="login-right">
            <span class="signin">  Social Network </span>
        
            <button class="social facebook" href="https://www.facebook.com/">Log in with Facebook</button>
            <button class="social Google" href="">Log in with Google</button>
            
            
        </div>
    </div> -->
    <!-- <footer>
        <p class="p-2 bg-dark text-white text-center ">@PETIFY@</p>
    </footer> -->