<?php
 include '../../connect.php';

if (isset($_POST['sub'])) {
        $user = md5($_POST['user']);
        $pass = md5($_POST['pass']);
        $sql = "select * from patient where Email='$user' and password='$pass' "; 
		$r = mysqli_query($con, $sql);
		$row = mysqli_num_rows($r);

		if($row == 1){
			$ipaddress = $_SERVER['REMOTE_ADDR'];
			$nurse =$user;

			$sql_login = "INSERT INTO `patientlogin`(`Email`, `IP_address`,`Time`) VALUES ('$nurse','$ipaddress',CURRENT_TIMESTAMP())";
			$result_login = mysqli_query($con, $sql_login);

			if ($result_login) {
				$_SESSION['user'] = $user;
				header('location:../profile/profile.php');
			} else {
				echo("<script>alert('Login Failed! Try Again ')</script>");
			}
		}else{
			echo "<script>alert('No Such Account')</script>"; 
			header('location:login.php');
		}
}
