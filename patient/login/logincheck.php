<?php
 include '../../connect.php';

if (isset($_POST['sub'])) {
        $user = md5($_POST['user']);
        $pass = md5($_POST['pass']);
        $sql = "select * from patient where Email='$user' and password='$pass' "; 
		$r = mysqli_query($con, $sql);
		$row = mysqli_num_rows($r);

		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $user;
			header('location:../profile/profile.php');
		}else{
			echo "<script>alert('No Such Account')</script>"; 
			header('location:login.php');
		}
}
