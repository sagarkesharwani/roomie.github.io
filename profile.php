<?php

// $user_id = 6;
$user_id = '7';
include('dbconn.php');
$query = mysqli_query($con, "select * from kyc where user_id='$user_id'");
while ($row = mysqli_fetch_array($query)) {
    $name = $row['name'];
    $adharno = $row['adhaar_no'];
    $city = $row['city'];
    $pincode = $row['pincode'];
    $profile = $row['profile'];
    $kyc = $row['kyc'];
    // $admin_type=$row['admin_type'];
}


?>

<!DOCTYPE html>
< lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Profile Page Design Example</title>

        <meta name="author" content="Codeconvey" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel='stylesheet'
            href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

        <!--Only for demo purpose - no need to add.-->
        <link rel="stylesheet" href="profile_css/demo.css" />

        <link rel="stylesheet" href="profile_css/style.css">
    </head>

    <body>

        <div class="ScriptTop">
            <div class="rt-container">
                <div class="col-rt-4" id="float-right">

                    <!-- Ad Here -->

                </div>
                <div class="col-rt-2">
                    <ul>
                        <li><a href="https://codeconvey.com/html-code-for-student-profile"
                                title="Back to tutorial page">Back to
                                Tutorial</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <header class="ScriptHeader">
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="rt-heading">
                        <h1>Student Profile Page Design Example</h1>
                        <p>A responsive student profile page design.</p>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">
                        <?php

                        ?>
                        <!-- Student Profile -->
                        <div class="student-profile py-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent text-center">
                                                <img class="profile_img" src="./adhaar_xml/zipfile/xml/8923/8923.png"
                                                    alt="<?php echo $profile ?>">
                                                <h3 value=""><?php echo $name ?></h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information
                                                </h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th width="30%">Adhaar no</th>
                                                        <td width="2%">:</td>
                                                        <td><?php echo $adharno ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Academic Year </th>
                                                        <td width="2%">:</td>
                                                        <td>2020</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Gender</th>
                                                        <td width="2%">:</td>
                                                        <td>Male</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">KYC</th>
                                                        <td width="2%">:</td>
                                                        <td><?php if ($kyc == "1") { ?>
                                                            <p
                                                                class="text-white text-center bg-success rounded p-2 font-bold">
                                                                Approved</p> <?php } else { ?> <p
                                                                class='text-white text-center bg-danger rounded- p-2 font-bold'>
                                                                Rejected</p> <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">

                                                        </th>
                                                        <td width="2%">:</td>

                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div style="height: 26px"></div>
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->

                    </div>
                </div>
            </div>
        </section>



        <!-- Analytics -->

    </body>