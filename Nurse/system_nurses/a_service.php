<?php

    include '../../connect.php';

    $id=$_GET['id'];
    $sql = "SELECT * FROM `request_form` where `Request_id`='$id'";
    if ($con) {
        $result = mysqli_query($con, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $u_mail=$row['User_Email'];
            $n_mail=$row['nurse_email'];

            $sql_user="SELECT * FROM `patient` WHERE `Email`='$u_mail'";
            $result_user=mysqli_query($con,$sql_user);
            $row_user=mysqli_fetch_assoc($result_user);

            $sql_nurse="SELECT * FROM `requested_nurse` WHERE `email`='$u_mail'";
            $result_nurse=mysqli_query($con,$sql_nurse);
            $row_nurse=mysqli_fetch_assoc($result_nurse);

            $n_name=$row_nurse['name'];
            $n_email=$row_nurse['email2'];

            $subject = "Neighbouring Nurse";
            $body = "$n_email has accepted our appointment request.";
            $headers = "From: ht1872004@gmail.com";
            $to_email=$row_user['email2'];

            if (! mail($to_email, $subject, $body, $headers)) {
                die(mysqli_error($con));
            }else{
                header('location:accepted_services.php');
            }
        }
    }
