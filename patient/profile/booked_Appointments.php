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
                                            <tr>
                                                <td>1</td>
                                                <td>Wound Care</td>
                                                <td>Ms.Alisha</td>
                                                <td><button class="button Running">Running</button></td>
                                                <td><button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Open
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Requested Appointment Form</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <table align="center" cellpadding="10" cellspacing="10" bgcolor="White">
                                                                        <tr>
                                                                            <td><b>Service Name:</b></td>
                                                                            <td><input type="text" style="width:600" id="email" name="Email" placeholder="Wound Care" maxlength="255" />
                                                                            </td>
                                                                </div>
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
                                            </td>

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
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="button button1" data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    </td>
                    <td>
                        <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Cancel
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"> Cancel Appointment </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to cacel appointment ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button button1" data-bs-dismiss="modal">No</button>
                                        <button type="button" class="button button1">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td><button class="button button1">Payment</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Injection</td>
                        <td>Ms.Kritika</td>
                        <td><button class="button Pending">Pending</button></td>
                        <td><button class="button button1">Open</button></td>
                        <td><button class="button button1">Cancel</button></td>
                        <td><button class="button button1">Payment</button></td>
                    </tr>

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
</body>

</html>