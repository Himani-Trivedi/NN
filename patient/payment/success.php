<?php

    include '../../connect.php';

    if($_REQUEST['nurse']){
        $n=$_REQUEST['nurse'];
        $id=$_REQUEST['form'];
        $mon=$_REQUEST['mon'];
        
        $sql = "UPDATE `request_form` SET `Status`=2 WHERE `Request_id`=$id";
        $result = mysqli_query($con, $sql);
    
        if (!$result) {
            die(mysqli_error($con));
        }

        $sql_nurse = "select * from `request_form` where `Request_id`=$id";
        $result_nurse = mysqli_query($con, $sql_nurse);
        $row_nurse=mysqli_fetch_assoc($result_nurse);
        $service=$row_nurse['service_name'];
        $ser="For ".$service;

        $payId=$_REQUEST['payId'];
        $sql_payment="INSERT INTO `user_payment`(`pay_id`,`request_form`, `Type`, `Tran_amount`) VALUES ('$payId',$id,'$ser','$mon')";
        $result_payment=mysqli_query($con,$sql_payment);
        
        if (!$result) {
            die(mysqli_error($con) + " So payment not added to Database");
        }

        $sql_update="UPDATE `requested_nurse` SET `acc_balance`=`acc_balance`+ $mon WHERE `email`='$n'";
        $result_update=mysqli_query($con,$sql_update);

        if (!$result) {
            die(mysqli_error($con) + " So Account Balance not Updated");
        }
        
        header("location:pay_reciept.php?id=$id&charge=$mon");

        header("location:../profile/App.php");



    }
