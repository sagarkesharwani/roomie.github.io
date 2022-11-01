<?php

include 'dbconn.php';

if (isset($_POST['signup'])) {
    $username1 = mysqli_real_escape_string($con, $_POST['first']);
    $username2 = mysqli_real_escape_string($con, $_POST['last']);
    $musername = $username1 . "  " . $username2;
    $email = mysqli_real_escape_string($con, $_POST['emailid']);
    $mobileno = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gmailquery = "select * from registerdetails where emailid= '$email'";
    $query = mysqli_query($con, $gmailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount >= 1) {
?>
<script>
alert("EMAIL EXITED");
</script>
<?php
    } else {
        if ($password == $password2) {
            $insertquery = "insert into registerdetails(username,emailid,mobileno,dob,password,password2) values('$musername','$email','$mobileno','$dob','$password','$password2')";
            $iquery = mysqli_query($con, $insertquery);
            if ($iquery) {
        ?>
<script>
alert("signed up");
</script>
<?php
                header("Location: signupf.php?login=success");
                exit();
            } else {
            ?>
<script>
alert("error");
</script>
<?php
            }
        } else {

            ?>
<script>
alert("password doesn't match each other");
</script>
<?php
        }
    }
}

?>