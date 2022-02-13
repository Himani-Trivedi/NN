<?php
include '../../connect.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neighbouring Nurse</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../logo.jpeg">
    <!-- Custom CSS -->
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
        body {
            font-family: "Roboto", sans-serif;
            font-size: 13px;
            color: #626262;
            font-weight: 500;
        }

        .button {
            border: none;
            color: white;
            padding: 7px 7px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;

            cursor: pointer;
        }

        .button1 {
            background-color: rgba(63, 187, 192, 255)
        }

        .Pending {
            background-color: Gold;
        }

        /* Green */
        .Completed {
            background-color: Green;
        }

        /* Green */
        .Running {
            background-color: Blue;
        }

        /* Green */
        .Expire {
            background-color: Red;
        }

        /* Green */
    </style>
</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="../../Medicio/index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../logo.jpeg" width="70" alt="homepage" class="dark-logo rounded-circle d-inline-block" style="border:2px solid rgba(63,187,192,255); ;" />
                            <span style="color:rgba(63,187,192,255); font-size: 16px;">Neighbouring Nurse</span>

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">

                            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" style="background-color:rgba(63,187,192,255) ;" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Booked Appointments</span></a>
                        </li>
                    </ul>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a href="" style="color:white; padding-right:0px"></i></a>
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Markarn Doe-->
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="btn sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="btn sidebar-link waves-effect waves-dark sidebar-link" href="Req_Appointments.php" aria-expanded="false"><i class="me-3 fas fa-file" aria-hidden="true"></i><span class="hide-menu">Requested Appointments</span></a></li>

                        <li class="sidebar-item"> <a class="btn sidebar-link waves-effect waves-dark sidebar-link" style="color:rgba(63,187,192,255) ;" href="booked_Appointments.php" aria-expanded="false">
                                <i class="me-3 fa fa-font" aria-hidden="true" style="color:rgba(63,187,192,255) ;"></i><span class="hide-menu">Booked Appointments</span></a>

                        <li class="text-center p-20 upgrade-btn">
                            <a href="../login/logout.php" class="btn text-white mt-4" style="background-color:rgba(63,187,192,255) ">Log Out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Booked Appointments</h4>
                                <!--<h6 class="card-subtitle">Add class <code>.table</code></h6>-->
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">
                                                    <H6>Sr.no<H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Service Name</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Nurse Name</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Service Status</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Open</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Cancel</h6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Payment</H6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            // $email = md5($_POST['email']);
                                            $name = "";
                                            $email = "";


                                            $mail = "44da8393548e6ac1fbcd76bb05e83104";
                                            $sql = "select * from `request_form` where `User_Email`='$mail'";
                                            $result = mysqli_query($con, $sql);


                                            if (!$result) {
                                                echo "error";
                                            }

                                            $i = 0;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $i++;
                                                $name = $row['service_name'];
                                                $formId = $row['Request_id'];
                                                // $email = $row['Admin_email'];
                                                $email = $row['nurse_email'];
                                                $status = $row['Status'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td id="Servicename"><?php echo $name; ?></td>
                                                    <td id="Nurseemail"><?php echo $email; ?></td>
                                                    <?php
                                                    if ($status == 0) {
                                                        echo "
                                                      <td><button class='button Pending'>Pending</button></td>
                                                      ";
                                                    } else if ($status == 1) {
                                                        echo "
                                                        <td><button class='button Running'>Running</button></td>
                                                        ";
                                                    } else if ($status == 2) {
                                                        echo "
                                                        <td><button class='button Completed'>Completed</button></td>
                                                        ";
                                                    } else {
                                                        echo "
                                                        <td><button class='button Expire'>Expired</button></td>
                                                        ";
                                                    }
                                                    ?>
                                                    <td>
                                                        <button type="button" onclick="openModal('<?php echo $formId; ?>')" class="button button1">
                                                            Open
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                            Cancel
                                                        </button>
                                                    </td>
                                                    <td><button class="button button1">Payment</button></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Cancle Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Cancel Appointment </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>
                        Are you sure you want to cacel appointment ?
                </div>
                <div class="modal-footer">
                    <a href='go.php?email=<?php echo $email; ?>&service=<?php echo $name; ?>' style="color:rgba(63,187,192,255) ;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                    </a>
                    </h6>
                    <button type="button" class="btn" style="background-color:rgba(63,187,192,255) ;" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- open Modal 1-->
    <div class="modal fade" id="Requested_appointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="form.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Requested Appointment </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>
                            <table align="center" cellpadding="10" cellspacing="10" bgcolor="White">
                                <tr>
                                    <td><b>Form :</b></td>
                                    <td><input type="text" name="form" style="width:600px;border-color:lightgrey;padding:5px;border-radius:5px;" id="form" readonly /></td>
                                </tr>
                                <tr>
                                    <td><b>Nurse :</b></td>
                                    <td><input type="email" name="Nursename" style="width:600px;border-color:lightgrey;padding:5px;border-radius:5px;" id="NurseName" readonly /></td>
                                </tr>
                                <tr>
                                    <td><b>Service :</b></td>
                                    <td><input type="text" name="service" style="width:600px;border-color:lightgrey;padding:5px;border-radius:5px;color:black;" id="selected_service" readonly /></td>
                                    </td>
                                </tr>
                                <!-- <tr>
                  <td><b>Date :</b></td>
                  <td><input type="text" style="border-color:lightgrey;padding:5px;border-radius:5px;" id="service_date" name="service_date" maxlength="30" required />
                  </td>
                </tr> -->
                                <tr>
                                    <td><b>Date-Time :</b></td>
                                    <td><input type="text" autocomplete="off" style="border-color:lightgrey;padding:5px;border-radius:5px;" id="datetime" name="date_time" />
                                    </td>
                                </tr>
                                <tr>
                                    <td><B>Prescription :</B></TD>
                                    <td><input type="file" style="border-color:lightgrey;padding:5px;border-radius:5px;" name="pres" id="Prescription" required></td>
                                </tr>

                                <tr>
                                    <td><b>Floor No. :</b></td>
                                    <td><input style="width:100%;border-color:lightgrey;padding:5px;border-radius:5px;" id="Landmark" name="floor_no" placeholder="House/Flat/Apartment No." required /></td>
                                </tr>
                                <tr>
                                    <td><b>Landmark :</b></td>
                                    <td><input style="width:100%;border-color:lightgrey;padding:5px;border-radius:5px;" id="Landmark" name="Landmark" placeholder="Landmark" required /></td>
                                </tr>
                                <tr>
                                    <td><b>Address :</b></td>
                                    <td><textarea style="border-color:lightgrey;padding:5px;border-radius:5px;" name="Address" rows="4" cols="60" placeholder="Address" required></textarea></td>
                                </tr>
                                <tr>
                                    <td><b>Pincode :</b></td>
                                    <td><input type="PINCODE" value="" style="border-color:lightgrey;padding:5px;border-radius:5px;" id="pincode" name="Pincode" placeholder="380007" maxlength="30" readonly required />
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Service Status:</b></td>
                                    <TD><button class="button Pending">Pending</button>
                                        <button class="button Completed">Completed</button>
                                        <button class="button Running">Running</button>
                                        <button class="button Expire">Expire</button>
                                    </TD>
                                </tr>
                                </td>
                                <input type="hidden" value="" id="NurseEmail" style="border-color:lightgrey;padding:5px;border-radius:5px;" name="nurse_email" />
                                <input type="hidden" value="<?php echo $mail; ?>" style="border-color:lightgrey;padding:5px;border-radius:5px;" name="patient_email" />
                                </td>
                                </tr>
                            </table>
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="button button1" data-bs-dismiss="modal">Close</button>
                    </div>
            </form>
        </div>
    </div>



    <!-- open Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Requested Appointment Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>
                        <table align="center" cellpadding="10" cellspacing="10" bgcolor="White">
                            <tr>
                                <td><b>Service Name:</b></td>
                                <td><input type="text" style="width:600" value="<?php echo $name; ?>" id="email" name="Email" />
                                </td>
                            </tr>
                            <tr>
                                <td><b>Service Time:</b></td>
                                <td><input type="time" style="width:600" id="time" name="Service_Time" placeholder="11:30" maxlength="30" />
                                </td>
                            </tr>

                            <tr>
                                <td><b>Service Date:</b></td>
                                <td><input type="date" style="width:600" id="Service_Date" name="Last_Name" placeholder="12-10-2022" maxlength="30" />
                                </td>
                            </tr>

                            <tr>
                                <td><b>Address:</b><br /><br /><br /></td>
                                <td><textarea name="Address" rows="2" cols="60" placeholder="A/102 Marvel Acro, Ahmedabad"></textarea></td>
                            </tr>


                            <tr>
                                <td><b>Pincode:</b></td>
                                <td><input type="PINCODE" style="width:600" id="pincode" name="Pincode" placeholder="382330" maxlength="30" />
                                </td>
                            </tr>

                            <tr>
                                <td><B>Prescription</B></TD>
                                <TD><input type="file" style="width:600" name="file" id="Prescription" placeholder="Prescription.pdf">
                            </tr>
                            <tr>
                                <td><b>Charges:</b></td>
                                <td><input type="text" style="width:600" name="Amount" id="Charges" placeholder="350 INR" maxlength="100" />
                                </td>
                            </tr>
                            <tr>
                                <td><b>Nurse Name:</b></td>
                                <td><button type="button" class="button button1"><a href="../Nurse/profile.php" style="color:white;">Nurse Name</a></button>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Service Status:</b></td>
                                <TD><button class="button Pending">Pending</button>
                                    <button class="button Completed">Completed</button>
                                    <button class="button Running">Running</button>
                                    <button class="button Expire">Expire</button>
                                </TD>
                            </tr>
                    </h6>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button button1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->
</body>
<script>
    // function yesRemove() {
    //     var x = document.getElementById('Servicename').value;
    //     var y = document.getElementById('Nurseemail').value;
    //     window.location.href = "go.php?;service=<?php echo $name; ?>; 
    // }

    function openModal(form) {
        // alert(form);
        document.getElementById('form').value = form;

        <?php
        $sql = "SELECT `Request_id`, `User_Email`, `service_name`, `Service_Date_Time`, `Address`, `Pincode`, `Prescription`, `Created_Req_time`,
             `nurse_email`, `Landmark`, `Block_Number`, `Status` FROM `request_form` WHERE `Request_id`=1";

        ?>
        $('#Requested_appointment').modal('toggle');
    }
</script>

</html>