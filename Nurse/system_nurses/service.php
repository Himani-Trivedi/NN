<?php 
    include '../../connect.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   
    <title>Nurse Service</title>
    <link href="../../logo.jpeg" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

    <style type="text/css">
        body{
            font-family: "Roboto", sans-serif;
            font-size: 13px;
            color: #626262;
            font-weight: 500;
        }


    </style>
</head>


<body>
   
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                   
                    <a class="navbar-brand" href="../Medicio/index.html">
                        <b class="logo-icon text-danger">
                            <img src="../../logo.jpeg" width="70" alt="homepage" class="dark-logo rounded-circle d-inline-block" style="border:2px solid rgba(63,187,192,255); ;" />
                            <span style="color:rgba(63,187,192,255); font-size: 16px;">Neighbouring Nurse</span>
                        </b>
                    </a>
                    
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
               
                <div class="navbar-collapse collapse" style="background-color:rgba(63,187,192,255) ;" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                 
                    <ul class="navbar-nav me-auto mt-md-0 ">
                      

                        <li class="nav-item hidden-sm-down">
                             <!-- <i class="me-3 fa fa-user" aria-hidden="true"></i> -->
                             <span
                                    class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Service</span></a>
                        </li>
                    </ul>

                  
                   <ul class="navbar-nav">
                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                <a href="completed_services.php" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#moneyModal">1500 Rs.
                            </a>
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" >
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" >
                        <!-- User Profile-->
                       <!--  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li> -->
                        <li class="sidebar-item" > <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="cert.php" aria-expanded="false"><i class="me-3 fa fa-certificate"
                                    aria-hidden="true"></i><span class="hide-menu">Certificates</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="exp.php" aria-expanded="false"><i class="me-3 fa fa-building" aria-hidden="true"></i><span class="hide-menu">Experience</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="location.php" aria-expanded="false" ><i class="me-3 fa fa-globe" 
                                    aria-hidden="true"></i><span class="hide-menu">Locations</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="time.php" aria-expanded="false"><i class="me-3 fa fa-columns"
                                    aria-hidden="true"></i><span class="hide-menu">Timing</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="service.php" aria-expanded="false"><i class="me-3 fa fa-info-circle" style="color:rgba(63,187,192,255) ;"
                                    aria-hidden="true"></i><span class="hide-menu" style="color:rgba(63,187,192,255) ;">Services</span></a></li> 

                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="accepted_services.php" aria-expanded="false"><i class="me-3 fa fa-check"
                                    aria-hidden="true"></i><span class="hide-menu">Accepted Services</span></a></li> 

                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="completed_services.php" aria-expanded="false"><i class="me-3 fa fa-check-circle"
                                    aria-hidden="true"></i><span class="hide-menu">Completed Services</span></a></li> 


                        <li class="text-center p-20 upgrade-btn">
                            <a href="../login/logout.php"
                                class="btn text-white mt-4"  style="background-color:rgba(63,187,192,255) ">Log Out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
        <div class="page-wrapper">
            <div class="container-fluid" id="box1">          
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                <div class="form-group">
                                        <label class="col-md-12 mb-0">Selecte Service</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none border-0 ps-0 form-control-line">
                                                <option>Dressing</option>
                                                <option>Catheterization</option>
                                                <option>Injection</option>
                                                <option>Wound Care</option>
                                                <option>Vital Checks</option>
                                            </select>
                                        </div>
                                        <span></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Charges</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button type="button" class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Remove</button>

                                            <button type="button" class="btn btn-success mx-4 me-md-3 text-white" style="background-color:rgba(63,187,192,255); border:0px" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button> 

                                             <button type="button" class="btn btn-success mx-4 me-md-3 text-white" style="background-color:rgba(63,187,192,255); border:0px" data-bs-toggle="modal" data-bs-target="#updateModal">Update </button>                                           
                                        </div>
                                    </div>

                                </form>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-wrapper">
                <div class="container-fluid" id="box2" >          
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                        <p style="font-size: 25px;">Please Wait for the Admin approval to Select Location, Services, Timming & to get into Search </p>
                                </div>
                            </div>
                        </div>
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
                <h5 class="modal-title" id="staticBackdropLabel">Remove location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="font-size:17px;">
                Are you sure yopu want to remove xyz service from your profile?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn" style="background-color:rgba(63,187,192,255) ;">No</button>
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
                       <form class="form-horizontal form-material mx-2">
                                <div class="form-group">
                                        <label class="col-md-12 mb-0">Selecte Service</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none border-0 ps-0 form-control-line">
                                                <option>Dressing</option>
                                                <option>Catheterization</option>
                                                <option>Injection</option>
                                                <option>Wound Care</option>
                                                <option>Vital Checks</option>
                                            </select>
                                        </div>
                                        <span></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Charges</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" disabled>
                                        </div>
                                    </div>
                        </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn " style="background-color:rgba(63,187,192,255) ;">Save changes</button>
              </div>
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
                       <form class="form-horizontal form-material mx-2">
                                <div class="form-group">
                                        <label class="col-md-12 mb-0">Selecte Service</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none border-0 ps-0 form-control-line">
                                                <option>Dressing</option>
                                                <option>Catheterization</option>
                                                <option>Injection</option>
                                                <option>Wound Care</option>
                                                <option>Vital Checks</option>
                                            </select>
                                        </div>
                                        <span></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Charges</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" disabled>
                                        </div>
                                    </div>
                        </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn " style="background-color:rgba(63,187,192,255) ;">Save changes</button>
              </div>
            </div>
          </div>
        </div>

         <!-- Modal -->
        <div class="modal fade" id="moneyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Earned Money</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="font-size:17px;">
                    Do you want to withdraw money or delete account?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Delete</button>
                <button type="button" class="btn" style="background-color:rgba(63,187,192,255) ;">Withdraw</button>
              </div>
            </div>
          </div>
        </div>
</body>
<script>
 <?php
        
            if($_SESSION['status'] == 0){
?>
        document.getElementById('box1').style.display="none";
        document.getElementById('box2').style.display="inline-block";
<?php
            }else{
?>
        document.getElementById('box1').style.display="inline-block";
        document.getElementById('box2').style.display="none";   
<?php
            }
    ?>
</script>
</html>