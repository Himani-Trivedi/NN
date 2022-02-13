<?php
include "../connect.php";

$email =  $_REQUEST['Nursename'];
$patient =  $_REQUEST['patient_email'];
$nurse =  $_REQUEST['nurse_email'];
$ser =  $_REQUEST['service'];
$service_time = $_REQUEST['date_time'] . ":00";
$address = $_REQUEST['Address'];
$floor_no = $_REQUEST['floor_no'];
$landmark = $_REQUEST['Landmark'];
$pin = $_REQUEST['Pincode'];

$fileName2 = $_FILES['pres']['name'];
$filearr2 = explode('.', $fileName2);

if (strtolower(end($filearr2)) != "pdf") {
	die("
			<script>
				alert('Wrong Certificate type Must be pdf');
				window.location.href='nurse_service.php#data';
			</script>
		");
} else {
	$n = rand(100, 999);
	$dest2 = '../Nurse/Nurse_signup/upload/' . $n . $fileName2;
	move_uploaded_file($_FILES['pres']['tmp_name'], $dest2);
}

$timestamp = strtotime($service_time);
$date = date('Y-m-d H:i:s', $timestamp);

$sql = "INSERT INTO `request_form`(`User_Email`, `service_name`, `Service_Date_Time`, `Address`, `Pincode`,
 `Prescription`, `Created_Req_time`, `nurse_email`, `Landmark`, `Block_Number`, `Status`) 
 VALUES ('$patient','$ser','$date','$address',$pin,'$dest2',current_timestamp(),'$nurse',
 '$landmark','$floor_no',0)";
$result = mysqli_query($con, $sql);

if (!$result) {
	die(mysqli_error($con));
}

$sql_nurse = "SELECT * FROM `requested_nurse` WHERE `email`='$nurse';";
$result_nurse = mysqli_query($con, $sql_nurse);

while ($row = mysqli_fetch_assoc($result_nurse)) {
	$to_email = $row['email2'];
}

$accpet_link = "<a href='http://localhost/Project/NN/Nurse/system_nurses/accepted_services.php?nurse='.$nurse.'></a>";

$subject = "Neighbouring Nurse";
$body = "You got request for an Appointment at 
$address for $ser on $service_time.

Check Here : $link";
$headers = "From: ht1872004@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
	echo "
  console.log(
   ";
	mysqli_error($con);
	echo ");";
} else {
	echo "
  console.log(
  ";
	mysqli_error($con);
	echo ");";
}

header("location:../patient/profile/booked_Appointments.php");
