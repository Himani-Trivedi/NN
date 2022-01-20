<?php
include "connect.php";
if(isset($_POST['submit']))
{
    	 $service = $_REQUEST['service'];
	 $charge = $_REQUEST['charge'];
	 $des = $_REQUEST['des'];
	$files = $_FILES['file'];
	print_r($files);
	$filename=$files['name'];
	$filetmp=$files['tmp_name'];
	$fileerror=$files['error'];	
	$fileext = explode('.',$filename);
	$filecheck = strtolower(end($fileext));
	$fileextstored = array('png', 'jpg','jpeg');
	if(in_array($filecheck,$fileextstored))
{
	
	$sql="INSERT INTO `services` (`service_name`, `s_charge`, `description`, `photo`, `Added_by`, `Added_time`, `Modified_Time`) VALUES  ('$service','$charge','$des','$filename', NULL, current_timestamp(), NULL)";
	if(mysqli_query($con,$sql))
	{
	echo "<p>Data Added Successfully.</p>";
     	}  	
}

}
	
mysqli_close($con); 
?>

