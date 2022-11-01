<?php
Session_start();
if (!isset($_SESSION["username"])) {
    header("Location:loginF.php");
}

include 'dbconn.php';
$edit = $_GET['edit'];
// echo $edit;
$query = mysqli_query($con, "select * from room_details where room_id='$edit'");
while ($row = mysqli_fetch_array($query)) {
    $deposit = $row['deposit'];
    $looking_for = $row['looking_for'];
    $city = $row['city'];
    $monthly_rent = $row['monthly_rent'];
    $notice_period = $row['notice_period'];
    $room_name = $row['room_name'];
    $address = $row['address'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


    <div class="name text-center m-2">
        <p>Update Profile</p>
    </div>
    <div style="width:50%; margin-left: 25%; background-color: #E5E8E8;" class="">
        <div id="msg"></div>
        <form action="profile_editb.php" method="post" style="margin:3%; padding:3%;" name="customer_form"
            id="customer_form">
            <div class="form-group">
                <label for="Customer Email">Enter Deposit</label>
                <input type="text" class="form-control" name="deposit" id="email" value="<?php echo $deposit; ?>"
                    placeholder="Enter deposit">
            </div>
            <div class="form-group">
                <label for="Customer Username">Enter Looking For</label>
                <input type="text" class="form-control" name="looking_for" id="username"
                    value="<?php echo $looking_for; ?>" placeholder="Enter looking for">
            </div>
            <div class="form-group">
                <label for="Password">Enter city</label>
                <input type="text" class="form-control" name="city" id="pass" value="<?php echo $city; ?>"
                    placeholder="Enter city">
            </div>

            <div class="form-group">
                <label for="Last Name">Enter Moonthly Rent</label>
                <input type="text" class="form-control" name="monthly_rent" id="lastname"
                    value="<?php echo $monthly_rent; ?>" placeholder="Enter Monthly Rent">
            </div>
            <div class="form-group">
                <label for="Admin Type">Notice Period</label>
                <input type="text" class="form-control" name="notice_period" id="lastname"
                    value="<?php echo $notice_period; ?>" placeholder="Enter  Notice period" />

            </div>
            <div class="form-group">
                <label for="Admin Type">Room Name</label>
                <input type="text" class="form-control" name="room_name" id="lastname" value="<?php echo $room_name; ?>"
                    placeholder="Enter  room  name" />

            </div>
            <div class="form-group">
                <label for="Admin Type">Address</label>
                <input type="text" class="form-control" name="address" id="lastname" value="<?php echo $address; ?>"
                    placeholder="Enter Address" />

            </div>
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">
            <div class="form-group">
                <input type="submit" class="btn btn-block btn-success" name="submit" id="submit" placeholder="Save">
            </div>
        </form>
    </div>




</body>

</html>