<?php

	include 'connect.php';

	if(!isset($_SESSION['user']) || !isset($_SESSION['user']['terms'])){
		header('location:conditions.php');
	}else if(!isset($_SESSION['user']['email'])){
		header('location:email.php');
	}else if(!isset($_SESSION['user']['nurse_re_1'])){
		header('location:nurse_re_1.php');
	}else if(!isset($_SESSION['user']['rn_Cert'])){
		header('location:certificates.php');
	}else if(!isset($_SESSION['user']['exp'])){
		header('location:experience.php');
	}
	else{
		$data=$_SESSION['user'];

		echo "Request:";
		print_r($data['nurse_re_1']);
		echo "<br>";

		echo "Email:";
		print_r($data['email']);
		echo "<br>";

		echo "RN :";
		print_r($data['rn_Cert']);
		echo "<br>";

		if(isset($data['cert'])){
			echo "Certificates :";
			print_r($data['cert']);
			echo "<br>";
		}

		echo "Experience :";
		print_r($data['exp']);
		echo "<br>";

		echo "Bio :";
		print_r($data['bio']);
		echo "<br>";
		echo "<br>";
		echo "<br>";

		foreach($_SESSION as $key => $value){
			print_r($key);
			echo "<br>";
			print_r($value);
		}

	}

	
?>