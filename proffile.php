<?php
Session_start();
if (!isset($_SESSION["username"])) {
    header("Location:loginF.php");
}
#include dbconn.php
include 'dbconn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet"> -->


    <style>
    * {
        margin: 0;
        padding: 0
    }

    body {
        background-color: #aeaeae
    }

    img {
        border-radius: 50%;
        height: 130px;
        width: 130px;
    }

    .card {
        width: 350px;
        background-color: #efefef;
        border: none;
        cursor: pointer;
        transition: all 0.5s;
    }

    .image img {
        transition: all 0.5s
    }

    .card:hover .image img {
        transform: scale(1.5)
    }

    .btn {
        height: 140px;
        width: 140px;
        border-radius: 50%
    }

    .name {
        font-size: 22px;
        font-weight: bold
    }

    .idd {
        font-size: 14px;
        font-weight: 600
    }

    .idd1 {
        font-size: 12px
    }

    .number {
        font-size: 22px;
        font-weight: bold
    }

    .follow {
        font-size: 12px;
        font-weight: 500;
        color: #444444
    }

    .btn1 {
        height: 40px;
        width: 150px;
        border: none;
        background-color: #000;
        color: #aeaeae;
        font-size: 15px
    }

    .text span {
        font-size: 13px;
        color: #545454;
        font-weight: 500
    }

    .icons i {
        font-size: 19px
    }

    hr .new1 {
        border: 1px solid
    }

    .join {
        font-size: 14px;
        color: #a0a0a0;
        font-weight: bold
    }

    .date {
        background-color: #ccc
    }
    </style>
</head>

<body>
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <?php
            $iod = $_SESSION["id"];
            $query = mysqli_query($con, "select * from room_details where room_id ='$iod'");
            while ($row = mysqli_fetch_array($query)) {
            ?>

            <div class=" image d-flex flex-column justify-content-center align-items-center">
                <div class="img-fluid">
                    <img src="./upload/profile/<?php echo $row['profile_photo'] ?>" />
                </div>
                <span class="name mt-3">
                    <?php echo $_SESSION['username'] ?></span> <span class="idd"></span>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="follow font-weight-bold"><?php echo $row['address'] ?></span>
                </div>
                <div class=" d-flex mt-2"> <a href="profile_edit.php?edit=<?php echo $_SESSION["id"]; ?>"><button
                            class="btn1 btn-dark">Edit
                            Profile</button></a>
                </div>
                <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>
            </div>
        </div>
    </div>
    <?php
            } ?>

</body>

</html>