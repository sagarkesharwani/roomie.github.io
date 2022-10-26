<?php
session_start();
echo " hello";
if (!isset($_SESSION["username"])) {
    header("Location:loginF.php");
}
include 'dbconn.php';
$loginname = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM registerdetails WHERE emailid = '$loginname';";
$querys = mysqli_query($con, $sql);
$result = mysqli_num_rows($querys);
if ($result > 0) {
    $row = mysqli_fetch_assoc($querys);
    if ($password == $row['password']) {
        $_SESSION["username"] = $row['username'];
        $_SESSION["id"] = $row['id'];
        header('Location: admin_page.php');
    } else {
        header('Location:loginf.php');
        echo "wrong password";
?>
<script>
alert('wrong password');
</script>
<?php
    }
} else {
    header('location:loginf.php');
}

?>