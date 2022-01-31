<?php

	if(isset($_POST['subtype'])){
		if($_POST['sign_type']=='n'){
			header('location:Nurse_signUp/conditions.php');
		}elseif($_POST['sign_type']=='p'){
			echo "Will BE created soon";
		}
	}
?>
