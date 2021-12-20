<?php

	if(isset($_POST['subtype'])){

		if($_POST['log_type']=='n'){
			header('location:login/login.php?type=n');
		}elseif($_POST['log_type']=='a'){
			header('location:login/login.php?type=a');
		}elseif($_POST['log_type']=='p'){
			header('location:login/login.php?type=p');
		}
	}
?>


<!-- color :#3fbbc0
rgba(63,187,192,255) 
rgba(63,187,192,0.7)


font-family: "Roboto", sans-serif;
    font-size: 13px;

    color: #626262;

    font-weight: 500;-->