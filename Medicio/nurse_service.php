<?php
include '../connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NEIGHBOURING NURSE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/nursing.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    * {
      box-sizing: border-box;
    }

    .box {
      width: 100%;
      padding: 20px;
      align: center;
      border: 1px solid #dddd;
      border-radius: 6px;
      margin-bottom: 20px;
      display: flex;
      color: grey;
    }

    .card {
      display: flex;
      width: 400px;
      height: 600px;
      align: center;
      margin-left: 85px;
      margin-top: 100px;
      box-shadow: 0px 4px 8px black;
      padding: 40px;
      position: relative;
      background-color: blanchedalmond;
      float: left;
    }
  </style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Sunday, 7AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <div>
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="../Medicio/index.php">
          <b class="logo-icon text-danger">
            <img src="assets/img/nursing.png" width="70" alt="homepage" class="dark-logo rounded-circle d-inline-block" style="border:2px solid rgba(63,187,192,255); ;" />
            <span style="color:rgba(63,187,192,255); font-size: 25px;">Neighbouring Nurse</span>
          </b>
        </a>
        <!-- <a href="index.html" class="logo me-auto" style="color: #3fbbc0;"><img src="assets/img/nursing.png" alt=""> NEIGHBOURING NURSE</a> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto " href="index.php#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
            <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
            <li><a class="nav-link scrollto" href="nurse_service.php">Search</a></li>
            <li><a class="nav-link scrollto" href="index.php#contact">Contact Us</a></li>
            <li><a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#signup">Sign up</a></li>
            <li><a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#login">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
      </div>
    </header>


    <!-- ======= Hero Section ======= -->

    <section id="services" class="services services">
      <div class="container">

        <div class="section-title" style="visibility: hidden;">
          <h2>Search by Service</h2>
          <p>Short term nursing procedures that reduce your need to visit a hospital everyday.</p>
        </div>
        <div class="section-title">
          <h2>Search by Service</h2>
          <p>Short term nursing procedures that reduce your need to visit a hospital everyday.</p>
        </div>

        <form action="nurse.php" method="POST" >
          <div class="form-row" style="margin-left: 25%;">
            <div class="form-group col-md-4 required">
              <label for="inputState">Service</label>
              <select id="inputState" class="form-control" name="service" required>
                <option disabled selected>Choose</option>
                <?php
                $sql = "SELECT `service_name` from `services`";
                if ($con) {
                  $result = mysqli_query($con, $sql);
                  if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                      <option><?php echo $row['service_name']; ?></option>
                <?php
                    }
                  } else {
                    die('Oops !something went wrong.');
                  }
                } else {
                  die('Database issue.');
                }
                ?>

              </select>
            </div>
            <div class="form-group col-md-4 required">
              <label for="inputState">Location</label>
              <select id="inputState" class="form-control" name="location" required>
                <option disabled selected>Choose</option>
                <?php
                include '../connect.php';
                $sql = "SELECT `area_name` FROM `location`";
                if ($con) {
                  $result = mysqli_query($con, $sql);
                  if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                      <option><?php echo $row['area_name']; ?></option>
                <?php
                    }
                  } else {
                    die('Oops !something went wrong.');
                  }
                } else {
                  die('Database issue.');
                }
                ?>
              </select>
            </div>
          </div>
          <br>
          <input type="submit" value="Submit" name="save" style=" margin-left: 47% ; background-color: #3fbbc0; color: #fff; border: #3fbbc0; padding: 10px; padding-left: 20px; padding-right: 20px; border-radius: 4px;" />
        </form>
    </section>



    <!-- Modal SignUp -->
    <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SIGN UP AS...</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-footer">
            <a href="../patient/signUp/email.php"><button type="button" class="btn btn-secondary" style="background-color: rgba(63,187,192,255) ;" data-bs-dismiss="modal">Sign up as user</button></a>
            <a href="../Nurse/Nurse_signup/conditions.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sign up as nurse</button></a>

          </div>
        </div>
      </div>
    </div>


    <!-- Modal Login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">LOGIN AS...</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-footer">
            <a href="../patient/login/login.php"><button type="button" class="btn btn-secondary" style="background-color: rgba(63,187,192,255) ;" data-bs-dismiss="modal">login as user</button></a>
            <a href="../Nurse/login/login.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">login as nurse</button></a>

          </div>
        </div>
      </div>
    </div>


    <section class="form">
      <div class="main1">
        <!-- card1 -->
        <div class="card">

          <h3>Nurse name</h3>
          <hr>
          <img src="assets/img/doctors/doctors1.jpg" class="rounded-circle mx-auto d-block" alt="..." width="150px" style="radius : 100px; padding-bottom : 20px;">
          <span><b>Service name : </b>Vital Checks</span>
          <span><b>Service charge : </b>Rs. 350</span>
          <span><b>Experience : </b>September 2008 to March 2012<br>San Jose Hospital Sao Paolo<br> Assisted physicians in taking blood pressure,mesuring heartbeat and recording vitals in physical examination.</span>
          <br><br>
          <input type="submit" value="Show profile" style="background : #3fbbc0; color : white; border :#3fbbc0; padding : 10px; border-radius : 05px;" />

        </div>
        <!-- card 2 -->
        <div class="card">
          <h2>Nurse name</h2>
          <hr>
          <img src="assets/img/doctors/doctors-2.jpg" class="rounded-circle mx-auto d-block" alt="..." width="150px" style="radius : 100px; padding-bottom : 20px;">

          <span><b>Service name : </b>Elder Care</span>
          <span><b>Service charge : </b>Rs. 700</span>
          <span><b>Experience : </b>Compassionate elder caregiver and CNA with 6+ years experience providing in-home patient care. Have consistently maintained client reviews in excess of 94% positive. </span>
          <br>
          <input type="submit" value="Show profile" style="background : #3fbbc0; color : white; border :#3fbbc0; padding : 10px; border-radius : 05px;" />
        </div>
        <!-- card 3 -->
        <div class="card">
          <h2>Nurse name</h2>
          <hr>
          <img src="assets/img/doctors/doctors-3.jpg" class="rounded-circle mx-auto d-block" alt="..." width="150px" style="radius : 100px; padding-bottom : 20px;">

          <span><b>Service name : </b>Wound Care</span>
          <span><b>Service charge : </b>Rs. 200</span>
          <span><b>Experience : </b>Wound Care Nurse, August 2005 – Present
            National Healing Corporation, New York, NY
            Provided direct patient care and managed care for draining wounds, fistulas, pressure ulcers and skin breakdowns.</span>
          <br>
          <input type="submit" value="Show profile" style="background : #3fbbc0; color : white; border :#3fbbc0; padding : 10px; border-radius : 05px;" />
        </div>
        <!-- card 4 -->
        <div class="card">
          <h2>Nurse name</h2>
          <hr>
          <img src="assets/img/doctors/doctors-4.jpg" class="rounded-circle mx-auto d-block" alt="..." width="150px" style="radius : 100px; padding-bottom : 20px;">

          <span><b>Service name : </b>Injections</span>
          <span><b>Service charge : </b>Rs. 250</span>
          <span><b>Experience : </b>Bashirian, Walsh and Keeling - South Russellfort, Ohio<br>
            Maintained the highest level of patient satisfaction,generating referrals to keep the automotive rehabilitation unit productive. Prepared blood,tissue, and other labratory specimens for testing in lab.</span>
          <br>
          <input type="submit" value="Show profile" style="background : #3fbbc0; color : white; border :#3fbbc0; padding : 10px; border-radius : 05px;" />
        </div>
        <!-- card 5 -->
        <div class="card">
          <h2>Nurse name</h2>
          <hr>
          <img src="assets/img/doctors/doctors-5.jpg" class="rounded-circle mx-auto d-block" alt="..." width="150px" style="radius : 100px; padding-bottom : 20px;">

          <span><b>Service name : </b>Catheterization</span>
          <span><b>Service charge : </b>Rs. 550</span>
          <span><b>Experience : </b>August 2015 to current<br>
            University of Colorado Hospital,Auraro<br>
            Provide in-home nursing assessments and treatments visits in the patients home as ordered. Experience with DSL system use with daily skilled nursing documentation.</span>
          <br><br>
          <input type="submit" value="Show profile" style="background : #3fbbc0; color : white; border :#3fbbc0; padding : 10px; border-radius : 05px;" />
        </div>
        <!-- card 6 -->
        <div class="card">
          <h2>Nurse name</h2>
          <hr>
          <img src="assets/img/doctors/doctors-6.jpg" class="rounded-circle mx-auto d-block" alt="..." width="150px" style="radius : 100px; padding-bottom : 20px;">

          <span><b>Service name : </b>Intravenous Fluids</span>
          <span><b>Service charge : </b>Rs. 300</span>
          <span><b>Experience : </b>January 2009 to present<br>
            The Mount Sinai Hospital,New York
            <br>Inserted and replaced IVs according to doctors instruction.
            Administered pain managment and infection control medication.
          </span>
          <br><br>
          <input type="submit" value="Show profile" style="background : #3fbbc0; color : white; border :#3fbbc0; padding : 10px; border-radius : 05px;" />
        </div>
      </div>
    </section>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>