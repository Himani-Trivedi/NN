<?php

include '../../connect.php';


$form=$_POST['form'];


$sql = "select * from `request_form` where `Request_id`=$form";
$result = mysqli_query($con, $sql);

$i = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $i++;
    $name = $row['service_name'];
    $formId = $row['Request_id'];
    $email = $row['nurse_email'];
    $r = $row['receipt'];

    $sql_nurse = "SELECT * FROM `requested_nurse` WHERE `email`='$email'";
    $result_nurse = mysqli_query($con, $sql_nurse);
    $row_nurse = mysqli_fetch_assoc($result_nurse);

    $status = $row['Status'];
    $time = $row['Service_Date_Time'];
    $created_time = $row['Created_Req_time'];


    print_r($row);
    print_r($row_nurse);


}

?>

