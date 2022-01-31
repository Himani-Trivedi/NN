<?php
include '../../connect.php';

if (isset($_POST['sub'])) {
	$user = md5($_POST['user']);
	$pass = md5($_POST['pass']);
	$sql = "select * from admin where Admin_email='$user' and Password='$pass' ";

	$r = mysqli_query($con, $sql);

	$row = mysqli_num_rows($r);

	if ($row == 1) {
		echo "login successful";
		$_SESSION['admin'] = $user;
		header('location:../profile/Admin-Profile.php');
	} else{
		echo("<script>alert('No Such Admin')</script>");
		header('location:login.php');
	}

}
