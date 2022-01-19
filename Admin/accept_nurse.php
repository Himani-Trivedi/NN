<?php
     include '../connect.php';

     if (isset($_SESSION['accept_nurse']) && isset($_SESSION['admin'])) {
 
         if (!$con) {
             die("Not connected to db");
         }
 
         $email = $_SESSION['accept_nurse'];
         $admin=$_SESSION['admin'];
 
         $sql_req = "UPDATE `requested_nurse` SET `Approval_status`=1 WHERE `email`='$email';";
         $result = mysqli_query($con, $sql_req);
 
         if (!$result) {
             die(mysqli_error($con));
         }
 
         $sql_approv = "INSERT INTO `approval_status`(`Email`, `Admin_email`, `Approval _Status`,`Reason`, `Approval_time`) VALUES ('$email','$admin',1,'',CURRENT_TIMESTAMP())";
         $result = mysqli_query($con, $sql_approv);
 
         if (!$result) {
             die(mysqli_error($con));
         }

         header('location:req_nurses.php');
     }

?>