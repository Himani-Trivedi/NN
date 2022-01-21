<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neighboring Nurse</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../logo.jpeg">
    <!-- Custom CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="../Nurse/system_nurses/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon text-danger">
                            <img src="../logo.jpeg" width="70" alt="homepage" class="dark-logo rounded-circle d-inline-block" style="border:2px solid rgba(63,187,192,255); ;" />
                            <span style="color:rgba(63,187,192,255); font-size: 17px;">Neighboring Nurse</span>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->

                        </span>
                    </a>

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
                            <!-- <i class="me-3 fa fa-user" aria-hidden="true"></i> -->
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Service</span></a>
                        </li>

                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Diya Vora
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Admin-Profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Admin-Req_Nurse.php" aria-expanded="false"><i class="me-3 fa fa-columns" aria-hidden="true"></i><span class="hide-menu">Requested Nurse</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Admin-Acc_Nurse.php" aria-expanded="false"><i class="me-3 fa fa-table" aria-hidden="true"></i><span class="hide-menu">Accepted Nurse</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Loc/Admin-Location.php" aria-expanded="false"><i class="me-3 fa fa-globe" aria-hidden="true"></i><span class="hide-menu">Locations</span></a></li>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Admin-Service.php" aria-expanded="false" style="color:rgba(63,187,192,255) ;"><i class="me-3 fa fa-info-circle" aria-hidden="true" style="color:rgba(63,187,192,255) ;"></i><span class="hide-menu">Services</span></a></li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" id="">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Services</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select id="service" class="form-select shadow-none border-0 ps-0 form-control-line" onchange="addcharge(this.value);">
                                            <option value=""></option>
                                                <?php
                                                include '../connect.php';
                                                $sql = "SELECT * from `services` GROUP BY `service_name`";
                                                if ($con) {
                                                    $result = mysqli_query($con, $sql);

                                                    if ($result) {
                                                        
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                            <option value="<?php echo $row['service_name']; ?>"><?php echo $row['service_name']; ?></option>
                                                <?php
                                                        }
                                                    } else {
                                                        die('Query problem! while showing states');
                                                    }
                                                } else {
                                                    die('Db Problem!');
                                                }
                                                ?>
                                            </select>
                                            <br>
                                                <div id="service_data">

                                                </div>
                                        </div>
                                        <span></span>
                                    </div>                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Remove Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Remove Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                        <h5> Are you sure you want to remove xyz service?<h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" >Yes</button>
                        <button type="button" class="btn" style="background-color:rgba(63,187,192,255) ;" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-material mx-2" action="add-service.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Service</label>
                                <div class="col-md-12">
                                    <input type="text"name="service" id="service" class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Charge</label>
                                <div class="col-md-12">
                                    <input type="text"  name="charge" id="charge" class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Description</label>
                                <div class="col-md-12">
                                    <textarea rows="5"  name="des" id="des" class="form-control ps-0 form-control-line" style="resize:none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Upload Image</label>
                                <div class="col-md-12">
                                    <input type="file" name="file" accept="image/*">
                                </div>
                            </div>                     
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:rgba(63,187,192,255) ;">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Update Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Current Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form class="form-horizontal form-material mx-2" method="POST" action="">
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Service</label>
                                <div class="col-md-12">
                                    <input type="text" name="service" id="service_update" class="form-control ps-0 form-control-line">
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Charges</label>
                                    <div class="col-md-12">
                                        <input type="text" name="charge" id="charge_update" class="form-control ps-0 form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Description</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control ps-0 form-control-line" style="resize:none;"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Upload Image</label>
                                    <div class="col-md-12">
                                        <input type="file" id="img" accept="image/*">
                                    </div>
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:rgba(63,187,192,255) ;">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function addcharge(value) {
        // count++;
        $.ajax({
            url: 'service_det.php',
            type: 'POST',
            data: {service:value},
            success: function(result) {
               document.getElementById('service_data').innerHTML=result;
            }
        });
    }

    function dataSelectedUpdate() {
        if (document.getElementById('charge').value == 0) {
            alert("First Select the Service");
            $('#service').focus();
        } else {
            $('#updateModal').modal('toggle');
            document.getElementById('service_update').value = document.getElementById('service').value;

            document.getElementById('charge_update').value = document.getElementById('charge').value;
        }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</html>