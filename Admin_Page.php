<?php
Session_start();
if (!isset($_SESSION["username"])) {
  header("Location:loginF.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .jss10 {
        height: 100%;
        /* margin: 64px auto; */
        padding: 2% 5%;
        max-width: 1284px;
    }




    body {
        /* color: rgba(0, 0, 0, 0.87); */
        /* background: rgb(243, 241, 233); */
        margin: 0;
        font-size: 0.875rem;
        font-family: "Roboto",
            "Helvetica",
            "Arial",
            sans-serif;
        font-weight: 400;
        line-height: 1.43;
        letter-spacing: 0.01071em;
        /* background-color: #fafafa; */
    }

    .navbar-brand:hover {
        color: white;
    }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roomie!</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="css/dog_food.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <!-- Bootstrap core CSS -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">


</head>

<body class="doggy">
    <nav class="navbar navbar-expand-lg navbar-red-green" style="background-color:rgb(25 29 76);padding-bottom:1.5rem ">
        <a class="navbar-brand" href="Admin_page.php">Roomie </a>
        <a class="navbar-brand" href="Needroomf.php">Need Room </a>
        <a class="navbar-brand" href="haveroomf.php"> Have Room</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link bg-light text-primary" style="border-radius: 7px;"
                        href="proffile.php">profile</a>
                </li>
                <!-- 
                <li class="nav-item active">
                    <a class="nav-link" href="Triggers.php">SYSTEM LOGS <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="Admin_page.php">ADMIN <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item mx-3">
                    <a class="nav-link bg-light text-primary" style="border-radius: 7px;" href="logout.php">LOGOUT</a>
                </li>

            </ul>

        </div>
    </nav>




    <section class="jss10">
        <h1 class="text-center" style="color:rgb(25 29 76);font-weight:light;font-family: sans-serif">
            Welcome to Find Room</h1><br>

        <div class="row">
            <div class="col-md-6 my-4">

                <div class="text-center">
                    <p class="pt-4" style="font-size: 2rem;color:rgb(25 29 76);">Why Use Roomie?</p>
                </div>

                <div class="card-body">
                    <div class="dropdown ">
                        <p class="" style="font-size:1rem" type="button" data-toggle="dropdown">choose
                            Roomie Helps People To Find A Roommate, Flatmate, Rent A Room Or Apartment, PG In
                            Top
                            Cities Of India. Roomie Makes A Direct Connection Between Roommates Or Landlords
                            With
                            The Seekers.
                        <p> </p>
                        <p> We Want To Make Sure That You Have Complete Access To Everything We Have To Offer
                            Without
                            Those Annoying Upgrades. We Know Your Experience Will Be So Awesome That You Will Share
                            Us
                            And Recommend Us To Everyone You Know As We Grow. We Believe That Once You Use
                            Roomie.In
                            You’ll Agree That It’s The Best Roommate Finding Experience There Is.</p>
                        <span class="caret"></span>
                        </p>
                    </div>



                </div>
            </div>

            <div class=" col-lg-6 col-12">
                <img src="images/image.png" class="img-fluid">
            </div><br>

        </div>
    </section>



    <section class="jss10" style="background-color:rgb(243 241 233);">

        <div class="row">
            <div class=" col-lg-6 col-12">
                <img src="images/pics/lean.svg" class="img-fluid">
            </div><br>

            <div class="col-md-6 my-4">
                <h1 class="text-center" style="color:rgb(25 29 76);font-weight:bolder "> How It Works</h1><br>


                <div class="card-body">
                    <div class="dropdown ">
                        <p class="" style="font-size:1rem" type="button" data-toggle="dropdown">choose
                            Roomie Helps People To Find A Roommate, Flatmate, Rent A Room Or Apartment, PG In
                            Top
                            Cities Of India. Roomie Makes A Direct Connection Between Roommates Or Landlords
                            With
                            The Seekers.
                        <p> </p>
                        <p> We Want To Make Sure That You Have Complete Access To Everything We Have To Offer
                            Without
                            Those Annoying Upgrades. We Know Your Experience Will Be So Awesome That You Will Share
                            Us
                            And Recommend Us To Everyone You Know As We Grow. We Believe That Once You Use
                            Roomie.In
                            You’ll Agree That It’s The Best Roommate Finding Experience There Is.</p>
                        <span class="caret"></span>
                        </p>
                    </div>
                </div>



            </div>


        </div>
    </section>












    <!-- //dsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

    <section style="background-image:url(https://FindMyRoom.in/images/community.webp);">
        <div class="container m-5 my-5">
            <h3 class="text-center " style="font-size: 2.5rem;color:white; font-weight:bolder">Join Our
                Community Today And Get
                Notified</h3>
            <div class="container m-4">

                <div class="row mx-3">
                    <div class="col-lg-4 px-1 mb-6 " style="display: flex;
    margin-top: 4rem;font-weight:500">
                        <p class="ss" style="color:white;font-size:xxx-large" data-val="5000">100+</p>
                    </div>
                    <div class="col-lg-4 px-1 mb-6 " style="display: flex;
    margin-top: 4rem;font-weight:500">
                        <p class="ss" style="color:white;font-size:xxx-large" data-val="2500">0+</p>
                    </div>
                    <div class="col-lg-4 px-1 " style="display: flex;
    margin-top: 4rem;font-weight:500">
                        <p class="ss" style="color:white;font-size:xxx-large" data-val="20">0+</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 px-1 mb-6 " style="display: flex;font-weight:500">
                        <p class="" style="color:white;font-size:large">Followers</p>
                    </div>
                    <div class="col-lg-4 px-1 mb-6 " style="display: flex;font-weight:500">
                        <p class="" style="color:white;font-size:large">Active Users</p>
                    </div>
                    <div class="col-lg-4 px-1 mb-6 " style="display: flex;font-weight:500">
                        <p class="" style="color:white;font-size:large">Cities</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example21" class="form-control" />
                                <label class="form-label" for="form5Example21">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <!-- <h5 class="text-uppercase">Links</h5> -->

                        <!--Grid column-->

                        <!--Grid column-->

                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- <div class="container-fluid" enctype="multipart/form-data">
        <form action="" class="text-center">
            <div class="row">

                <div class="col-md-4 my-4">
                    <div class="card">
                        <div class="card-footer">
                            <p class="lead bg-light">Add New Product</p>
                        </div>

                        <div class="card-body">
                            <div class="dropdown ">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                    data-toggle="dropdown">choose where you
                                    want to add product
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu bg-dark">
                                    <li class="bg-light"><a href="Admin_Food.php">ADD Product</a></li>

                                </ul>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="col-md-4 my-4">
                    <div class="card">
                        <div class="card-footer">
                            <p class="lead bg-light">Update Product</p>
                        </div>

                        <div class="card-body">
                            <div class="dropdown ">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                    data-toggle="dropdown">choose where u want
                                    to update product
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu bg-dark ">
                                    <li class="bg-light"><a href="admin_update_f.php">Update Product</a></li>

                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="card">
                        <div class="card-footer">
                            <p class="lead bg-light">Delete Product</p>
                        </div>

                        <div class="card-body">
                            <div class="dropdown ">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                    data-toggle="dropdown">choose where u want
                                    to delete product
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu bg-dark ">
                                    <li class="bg-light"><a href="admin_delete_F.php">Delete Product</a></li>

                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- <div class="col-md-4"></div> -->
    </div>
    </form>
    </div> -->

    <script>
    let valudedis = document.querySelectorAll(".ss");
    let interval = 4000;

    console.log(valudedis);



    valudedis.forEach((e) => {
        let start = 0;
        let end = parseInt(e.getAttribute("data-val"));
        let duration = Math.floor(interval / end);
        let counter = setInterval(function() {
            start += 1;
            e.textContent = start;
            if (start == end) {
                clearInterval(counter);

            }
        }, duration);
    });
    </script>

    <script src="js/addons/rating.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="scripts.js"></script>

</body>

</html>