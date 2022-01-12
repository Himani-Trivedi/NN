<?php
 $ipaddress = getenv("REMOTE_ADDR") ;
 Echo "Your IP Address is " . $ipaddress;
?>


<?php   

 $ipaddress = $_SERVER['REMOTE_ADDR'];
 echo "Your IP Address is " . $ipaddress . "<br>";


 print_r($_SERVER['HTTP_USER_AGENT']);

 print_r(get_browser());

 echo "<br>";
 echo "<br>";
 echo "<br>";

 echo "Already Logged in";
 echo "Not System Nurse";

?>

<script>
var p1 = "success";
</script>

<?php
echo "<script>document.writeln(p1);</script>";
?>