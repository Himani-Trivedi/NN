<?php

	include 'connect.php';

	$data=$_SESSION['user'];

		echo "Request:";
	print_r($data['nurse_re_1']);
		echo "<br>";

		echo "RN :";
	print_r($data['rn_Cert']);
		echo "<br>";

		echo "Certificates :";
	print_r($data['cert']);
		echo "<br>";

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

?>