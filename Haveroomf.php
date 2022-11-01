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

    button :hover {
        background-color: #8cbe41;
        color: white;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<body>
    <nav class="navbar navbar-expand-lg navbar-red-green" style="background-color:white;padding-bottom:1.5rem ">
        <a class="navbar-brand" href="Admin_page.php">Roomie </a>
        <a class="navbar-brand" href="needroomf.php">Need Room </a>
        <a class="navbar-brand" href="haveroomf.php"> Have Room</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <!-- 
                <li class="nav-item active">
                    <a class="nav-link" href="Triggers.php">SYSTEM LOGS <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="Admin_page.php">ADMIN <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link bg-light text-primary" style="border-radius: 7px;" href="logout.php">LOGOUT</a>
                </li>
            </ul>

        </div>
    </nav>


    <section class="jss10" style="background-color: #f9fff9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-4">
                    <div class="text-center">
                        <p class="pt-4" style="font-size:3rem;color:rgb(25 29 76);font-weight:600">Getting
                            <span class="" style="color: #8cbe41; font-weight:700">Rental Agreement</span> made easy,
                            quick and affordable
                        </p>
                    </div>

                    <div class="card-body">
                        <div class="dropdown ">
                            <p class="pb-3 text-muted" style="font-weight:400;font-size:larger"> Lowest Price
                                Guaranteed!! Create
                                your
                                rental agreement
                                online in minutes</p>
                        </div>

                        <button style="color: #8cbe41;border-radius:2px;border-color:8cbe41;background-color: #f9fff9;"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                            class="mt-8 px-6 py-2 transition duration-200 text-custom-green border border-custom-green hover:bg-custom-green font-medium hover:text-white rounded pp">Create
                            Rent Agreement</button>


                    </div>
                </div>

                <div class=" col-lg-6 col-12">
                    <img src="images/pics/rent-agreement.svg    " class="img-fluid">
                </div><br>

            </div>
        </div>

    </section>
    <section class="jss10" style="">
        <div class="container">
            <div class="row">

                <div class=" col-lg-6 col-12">
                    <img src="images/pics/eqaro.svg    " class="img-fluid">
                </div><br>
                <div class="col-lg-6 my-4">
                    <div class="text-center">
                        <p class="pt-4" style="font-size:3rem;color:rgb(25 29 76);font-weight:600">Don't want to pay
                            <span class="" style="color: #8cbe41; font-weight:700">security deposit?</span>
                        </p>
                    </div>

                    <div class="card-body">
                        <div class="dropdown ">
                            <p class="pb-3 text-muted" style="font-weight:400;font-size:larger"> Now, with rental bond,
                                your peace of mind is guaranteed</p>
                        </div>

                        <a href="needroomf.php">
                            <button
                                style="color: #8cbe41;border-radius:2px;border-color:8cbe41;background-color: #f9fff9;"
                                class="mt-8 px-6 py-2 transition duration-200 text-custom-green border border-custom-green hover:bg-custom-green font-medium hover:text-white rounded pp">

                                Apply Now</button>
                        </a>



                    </div>
                </div>

            </div>
        </div>
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Post a Room</h5>
                        <button type="button" data-bs-dismiss="modal" class="far fa-times" aria-label="Close"><i
                                class="far fa-times"></i></button>
                    </div>
                    <div class="modal-body rounded" style="background-color: #f9fff9;">
                        <form action="haveroomb.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" name="name" id="inputEmail4"
                                        placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="city"
                                        id="inputCity">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Pincode</label>
                                    <input type="text" class="form-control" name="pincode" id="inputPassword4"
                                        placeholder="Pincode">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Profile Photo</label>
                                    <input type="file" class="form-control" accept="image/*" name="images"
                                        id="inputPassword4" placeholder="Profile Photo">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Monthly Rent*</label>
                                    <input type="number" class="form-control" name="rent" id="inputEmail4"
                                        placeholder="Monthly Rent*">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Notice Period (No. of months)*</label>
                                    <input type="number" class="form-control" name="notice" id="inputEmail4"
                                        placeholder="Notice Period">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" name="address" id="inputAddress"
                                    placeholder="Address (city,Maharashtra)">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Photos of Rooms</label>
                                    <input type="file" class="form-control" name="image[]" placeholder="Photos"
                                        multiple>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Security deposit</label>
                                    <input type="number" class="form-control" name="deposit" id="inputEmail4"
                                        placeholder="Security deposit">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Roomn ame</label>
                                <input type="text" class="form-control" name="facilities" id="inputAddress"
                                    placeholder="Room Name">
                            </div>


                            <div class="form-group">
                                <div class="form-check">
                                    <label>Looking for</label>
                                    <input type="radio" name="gender" value="male"> Male
                                    <input type="radio" name="gender" value="female"> Female

                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-success rounded">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>