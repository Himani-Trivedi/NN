<?php

	include 'connect.php';

	if(!isset($_SESSION['user']) || !isset($_SESSION['user']['terms'])){
		header('location:conditions.php');
	}

	if(!isset($_SESSION['user']['email'])){
		header('location:email.php');
	}else if(!isset($_SESSION['user']['nurse_re_1'])){
			header('location:nurse_re_1.php');
	}else if(!isset($_SESSION['user']['bio'])){
			header('location:bio.php');
	}else if(!isset($_SESSION['user']['rn_Cert'])){
			header('location:certificates.php');
	}else{
		
		if(!$con){
			die("Sorry Not Connected to Server");
		}

		$mail=$_SESSION['user']['email'];
		$fname=$_SESSION['user']['nurse_re_1']['fname'];
		$lname=$_SESSION['user']['nurse_re_1']['lname'];

		$mail=md5($mail);
		$name= "$fname $lname ";

		$pass=$_SESSION['user']['nurse_re_1']['password'];
		$pass=md5($pass);

		$ph=$_SESSION['user']['nurse_re_1']['phone'];
		$g=$_SESSION['user']['nurse_re_1']['gender'];
		$photo=$_SESSION['user']['nurse_re_1']['profile_pic']['dest'];

		$rn=$_SESSION['user']['rn_Cert']['dest'];

		$bio=$_SESSION['user']['bio'];

		echo $mail."<br>";
		echo $bio."<br>";
		echo $rn."<br>";
		echo $g."<br>";
		echo $photo."<br>";
		echo $ph."<br>";
		echo $name."<br>";
		echo $pass."<br>";


		$sql="INSERT INTO `requested_nurse`(`email`, `name`, `password`, `ph_no`, `gender`, `profile_pic`, `rn_cert`, `bio`, `Approval_status`, `Added_time`) 
		VALUES ('$mail','$name','$pass','$ph','$g','$photo','$rn','$bio',0,CURRENT_TIMESTAMP())";

		$result=mysqli_query($con,$sql);

		if(!$result){
			mysqli_error($con);
			die('Not Executed');
		}

		move_uploaded_file($_SESSION['user']['rn_Cert']['tmp_name'], $_SESSION['user']['rn_Cert']['dest']);
		move_uploaded_file($_SESSION['user']['nurse_re_1']['profile_pic']['tmp_name'], $_SESSION['user']['nurse_re_1']['profile_pic']['dest']);

		echo " Profile Uploaded <br> Certificates & Excperienc are incomplete";
		
	}
	
	
	
	// else if(!isset($_SESSION['user']['email'])){
	// 	header('location:email.php');
	// }else if(!isset($_SESSION['user']['nurse_re_1'])){
	// 	header('location:nurse_re_1.php');
	// }else if(!isset($_SESSION['user']['rn_Cert'])){
	// 	header('location:certificates.php');
	// // }else if(!isset($_SESSION['nurse_exp'])){
	// // 	header('location:experience.php');}
	// }
	// else{
	// 	$data=$_SESSION['user'];

	// 	echo "Request:";
	// 	print_r($data['nurse_re_1']);
	// 	echo "<br>";

	// 	echo "Email:";
	// 	print_r($data['email']);
	// 	echo "<br>";

	// 	echo "RN :";
	// 	print_r($data['rn_Cert']);
	// 	echo "<br>";

	// 	if(isset($data['cert'])){
	// 		echo "Certificates :";
	// 		print_r($data['cert']);
	// 		echo "<br>";
	// 	}

	// 	echo "Experience :";
	// 	print_r($data['nurse_exp']);
	// 	echo "<br>";

	// 	echo "Bio :";
	// 	print_r($data['bio']);
	// 	echo "<br>";
	// 	echo "<br>";
	// 	echo "<br>";

	// 	foreach($_SESSION as $key => $value){
	// 		print_r($key);
	// 		echo "<br>";
	// 		print_r($value);
	// 	}

	// }

	
?>