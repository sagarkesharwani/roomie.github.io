<?php
session_start();
// echo " hello";
if (!isset($_SESSION["username"])) {
    header("Location:loginF.php");
}
include 'dbconn.php';

if (isset($_POST['submit'])) {
    if ($_POST['id']) {
        $city = $_POST['city'];
        $id = $_POST['id'];
        $monthly_rent = $_POST['monthly_rent'];
        $room_name = $_POST['room_name'];
        $looking_for = $_POST['looking_for'];
        $notice_period = $_POST['notice_period'];
        $deposit = $_POST['deposit'];
        $address = $_POST['address'];

        $insertquery = "update room_details set city='$city',monthly_rent='$monthly_rent',looking_for='$looking_for',notice_period='$notice_period',deposit='$deposit',address='$address',room_name='$room_name' where room_id='$id' ";
        $iquery = mysqli_query($con, $insertquery);
    }
    if ($iquery) {
?>
<script>
alert("signed up");
</script>
<?php
        header("Location:admin_page.php");
    }
}
?>