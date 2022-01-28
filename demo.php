<?php
 $ipaddress = getenv("REMOTE_ADDR") ;
 Echo "Your IP Address is " . $ipaddress;
?>


<?php   

 $ipaddress = $_SERVER['REMOTE_ADDR'];
 echo "Your IP Address is " . $ipaddress . "<br>";


 print_r($_SERVER['HTTP_USER_AGENT']);

 print_r(get_browser());

 echo "<br>";
 echo "<br>";
 echo "<br>";

 echo "Already Logged in";
 echo "Not System Nurse";

?>

<script>
var p1 = "success";
</script>

<?php
echo "<script>document.writeln(p1);</script>";
?>


<?php
 $ipaddress = getenv("REMOTE_ADDR") ;
 Echo "Your IP Address is " . $ipaddress;
?>


<?php   

 $ipaddress = $_SERVER['REMOTE_ADDR'];
 echo "Your IP Address is " . $ipaddress . "<br>";


 print_r($_SERVER['HTTP_USER_AGENT']);

 print_r(get_browser());

 echo "<br>";
 echo "<br>";
 echo "<br>";

 echo "Already Logged in";
 echo "Not System Nurse";

?>                          

<!-- Id: rzp_test_Nn47y52bQed0NF
secret : 0wlIVCQcc4L6mtJmimxa8HK4
image: "https://example.com/your_logo"



status 0 : pending request
        1: Account accpeted
        2:Payment Done
        3: Loaction,service,Timming added
    Now Publish in appnurses-->




    <?php
                        if (isset($_SESSION['admin_profile'])) {
                        ?>
                        <li class="sidebar-item" > <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="cert.php" aria-expanded="false"><i class="me-3 fa fa-certificate" 
                                    aria-hidden="true"></i><span class="hide-menu" >Certificates</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="exp.php" aria-expanded="false"><i class="me-3 fa fa-building" aria-hidden="true" style="color:rgba(63,187,192,255) ;"></i><span class="hide-menu" style="color:rgba(63,187,192,255) ;">Experience</span></a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                                <a href="unset_admin_profile.php" class="btn text-white mt-4" style="background-color:rgba(63,187,192,255) ">Back</a>
                            </li>
                    <?php
                    } else {
                    ?>
                    <li class="sidebar-item" > <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="cert.php" aria-expanded="false"><i class="me-3 fa fa-certificate" 
                                    aria-hidden="true"></i><span class="hide-menu" >Certificates</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="exp.php" aria-expanded="false"><i class="me-3 fa fa-building" aria-hidden="true" style="color:rgba(63,187,192,255) ;"></i><span class="hide-menu" style="color:rgba(63,187,192,255) ;">Experience</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="location.php" aria-expanded="false" ><i class="me-3 fa fa-globe" 
                                    aria-hidden="true"></i><span class="hide-menu">Locations</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="time.php" aria-expanded="false"><i class="me-3 fa fa-columns"
                                    aria-hidden="true"></i><span class="hide-menu">Timing</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="service.php" aria-expanded="false"><i class="me-3 fa fa-info-circle" 
                                    aria-hidden="true"></i><span class="hide-menu" >Services</span></a></li>

                        
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="accepted_services.php" aria-expanded="false"><i class="me-3 fa fa-check"
                                    aria-hidden="true"></i><span class="hide-menu">Accepted Services</span></a></li> 

                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="completed_services.php" aria-expanded="false"><i class="me-3 fa fa-check-circle"
                                    aria-hidden="true"></i><span class="hide-menu">Completed Services</span></a></li> 
 

                        <li class="text-center p-20 upgrade-btn">
                            <a href="../login/logout.php"
                                class="btn text-white mt-4" style="background-color:rgba(63,187,192,255) ">Log Out</a>
                        </li>

                        <?php
                        }
                        ?>