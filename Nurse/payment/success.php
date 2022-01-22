<?php

    include '../../connect.php';

    if($_REQUEST['nurse']){
        $n=$_REQUEST['nurse'];
        
        $sql = "UPDATE `requested_nurse` SET `Approval_status`=2 WHERE email='$n';";
        $result = mysqli_query($con, $sql);
    
        if (!$result) {
            die(mysqli_error($con));
        }
        
        header("location:../system_nurses/profile.php?nurse=$n");

    }


?>