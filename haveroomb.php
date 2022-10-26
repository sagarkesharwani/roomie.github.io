<?php
// session_start();
session_start();
// echo " hello";
if (!isset($_SESSION["username"])) {
    header("Location:loginF.php");
}
include 'dbconn.php';

if (isset($_POST['submit'])) {
    $user_id = $_SESSION['id'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $rent = $_POST['rent'];
    $roomname = $_POST['facilities'];
    $facilities = $_POST['facilities'];
    $gender = $_POST['gender'];
    $notice = $_POST['notice'];
    $deposit = $_POST['deposit'];
    $address = $_POST['address'];
    $img = $_FILES["images"]["name"];
    $iquery = 0;
    $imgcount = count($_FILES['image']['name']);
    $j = 1;
    $gmailquery = "select * from room_details where profile_photo= '$img'";
    $query = mysqli_query($con, $gmailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount >= 1) {
?>
<script>
alert("file already exist");
break;
</script>
<?php
    } else {
        move_uploaded_file($_FILES['images']['tmp_name'], "./upload/profile/$img");
        $insertquery = "insert into room_details(room_id,city,pincode,profile_photo,monthly_rent,notice_period,address,room_name,looking_for,deposit) values('$user_id','$city','$pincode','$img','$rent','$notice','$address','$facilities','$gender','$deposit')";
        $jquery = mysqli_query($con, $insertquery);
    }

    $room_id = mysqli_insert_id($con);
    for ($i = 0; $i < $imgcount; $i++) {
        $imgname =  $roomname . $j . $_FILES['image']['name'][$i];
        $imgtemp = $_FILES['image']['tmp_name'][$i];
        $target = "./upload/" . $imgname;
        $j = $j + 1;
        $gmailquery = "select * from room_photos where photos= '$imgname'";
        $query = mysqli_query($con, $gmailquery);
        $emailcount = mysqli_num_rows($query);
        if ($emailcount >= 1) {
        ?>
<script>
alert("file already exist");
break;
</script>
<?php
        } else {
            $insertquery = "insert into room_photos(rooms_id,photos) values('$room_id','$imgname')";
            $iquery = mysqli_query($con, $insertquery);
            $iquery += 1;
            move_uploaded_file($imgtemp, $target);
        }
    }
}
if ($iquery > 0) {
    ?>
<script>
alert("Uploaded succesfull");
</script>
<?php
    header("Location: admin_page.php");
    exit();
} else {
    $url = 'admin_page.php';
    echo '<script>alert("File Exists")</script>';

    echo '<script type="text/javascript">';
    echo 'window.location.href="' . $url . '";';
    echo '</script>';
}

?>