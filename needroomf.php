<?php
// session_start();
session_start();
if (!isset($_SESSION["username"])) {
    header("Location:loginF.php");
}
include 'dbconn.php';

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

    .bcontent {
        margin-top: 10px;
    }

    .hrr {
        border: gray solid 1px;
    }

    .card:hover {
        transform: scale(1.1);
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

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->

    <!-- Bootstrap core CSS -->

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    Material Design Bootstrap

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet"> -->


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-red-green" style="background-color:rgb(25 29 76);padding-bottom:1.5rem ">
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


    <section>
        <div class="container py-2 ">
            <nav class="navbar navbar-expand-lg navbar-red-green bg-light" style=" border-radius:1rem">
                <a class="navbar-brand" href="Admin_page.php">Roomie /</a>
                <a class="navbar-brand" href="needroomf.php">Home / </a>
                <a class="navbar-brand" href="haveroomf.php">Property /</a>
                <a class="navbar-brand" href="haveroomf.php">All listing /</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                    </ul>

                </div>
            </nav>
        </div>
    </section>

    <div class="container img-fluid">
        <!-- <h2>Bootstrap Horizontal Card</h2> -->

        <?php
        $sql = "Select * from registerdetails right JOIN room_details ON registerdetails.id = room_details.room_id ";
        include 'dbconn.php';
        // $query = "SELECT * FROM room_details ORDER BY id ASC ";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="row m-2">
            <div class="card col-lg-5 mx-3 " style="width:550px;height:180px ;border-radius: 0.5rem;">
                <form method="post" action="food.php?action=add&id=<?php echo $row["registerdetails.id"]; ?>">
                    <div class="row no-gutters">
                        <div class="col-sm-4">
                            <img class="img-fluid hover-zoom my-1" alert(hello) data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"
                                src="./upload/profile/<?php echo $row["profile_photo"];
                                                                                                                                                                        ?>"
                                alt=" Suresh Dasari Card">
                            <div class="col my-1 mx-4">
                                <a href="view.php?edit=<?php echo $row["id"]; ?>">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="card-body">


                                <h5 class="card-title mx-2" style="font-size:large;">
                                    <?php echo $row["username"]; ?>
                                </h5>

                                <p style=" font-size: x-small;margin-top: -10px;" class="pt-0">
                                    <i class="fas fa-map-marker-alt" style="width: 15px;
    font-size: medium;"></i>
                                    <?php echo $row["address"]; ?>
                                </p>


                                <div class="row mx-1">
                                    <table style="width:100%" style="margin-top: -8px">
                                        <tr>
                                            <td class="text-center" style="font-size:x-small;font-weight :500;">Rent
                                            </td>
                                            <td class="text-center" style="font-size:x-small;font-weight:500;">
                                                Notice Period</td>
                                            <td class="text-center" style="font-size:x-small;font-weight:500;">
                                                Looking for</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" style="font-size:small">
                                                <?php echo $row["monthly_rent"]; ?>
                                            </td>
                                            <td style="font-size:x-small" class="text-center">


                                                <?php echo $row["notice_period"]; ?> Months

                                            </td>
                                            <td style="font-size:small" class="text-center">
                                                <?php echo $row["looking_for"]; ?></td>
                                        </tr>
                                        <!-- <div class="hr">-</div> -->
                                        <hr>
                                        <tr class="my-3">
                                            <td class="text-center" style="font-size:x-small;font-weight :500;">
                                                Deposit</td>
                                            <td class="text-center" style="font-size:x-small;font-weight:500;">Mail
                                            </td>
                                            <td class="text-center" style="font-size:x-small;font-weight:500;">Call
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" style="font-size:small">
                                                <?php echo $row["deposit"]; ?>

                                            </td>
                                            <td style="font-size:small" class="text-center">
                                                <!-- -->

                                                <a href="mailto:<?php echo $row["emailid"]; ?>  "><i
                                                        class="fas fa-envelope"></i></a>
                                            </td>
                                            <td style="font-size:small" class="text-center">
                                                <a href="tel:+91:<?php echo $row["mobileno"]; ?>  "><i
                                                        class="fas fa-phone"></i></a>

                                        </tr>

                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Post a Room
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body rounded" style="background-color: #f9fff9;">
                            <form action="haveroomb.php" method="POST" enctype="multipart/form-data">
                                <div class="container">
                                    <!-- Gallery -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                                                class="w-100 shadow-1-strong rounded mb-4"
                                                alt="Wintry Mountain Landscape" />
                                        </div>

                                        <div class="col-lg-4 mb-4 mb-lg-0">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                                class="w-100 shadow-1-strong rounded mb-4"
                                                alt="Mountains in the Clouds" />

                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                                        </div>

                                        <div class="col-lg-4 mb-4 mb-lg-0">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                                                class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                                                class="w-100 shadow-1-strong rounded mb-4"
                                                alt="Yosemite National Park" />
                                        </div>
                                    </div>
                                    <!-- Gallery -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            </form>
        </div>
        <?php
            }
        }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>