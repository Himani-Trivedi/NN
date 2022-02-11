<?php

    include "../../connect.php";
    echo "done";
    
    
        $service=$_REQUEST['service'];   
    $email= $_REQUEST['email'];
    echo "done";
        if(!$con){
			
			die("Not connected to db");
		}

        $sql="DELETE FROM `request_form` WHERE `nurse_email`= '$email' AND `service_name`='$service'";
        $result=mysqli_query($con,$sql);
        echo "done";
        if(!$result){
            echo "error";
			die(mysqli_error($con));
		}
        header("location:app.php");

    

    

?>
