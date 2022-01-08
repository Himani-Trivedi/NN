<?php
include 'connect.php';

if (isset($_SESSION['u'])) {
?>
    <h1>Welcome to Neighouring Nurse <?php echo $_SESSION['u']; ?></h1>

    <table>
        <tr>
            <td>
                <a href="sendmail.php">Send Mail!!</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="logout.php">Log out</a>
            </td>
        </tr>
    </table>

    <?php
} else if (isset($_SESSION['user_first_name'])) {

    $name = $_SESSION['user_first_name'] . " " . $_SESSION['user_last_name'];
    $mail = $_SESSION['user_email_address'];
    $u = md5($mail);

    if ($con) {
        $ipaddress = getenv("REMOTE_ADDR") ;
        echo "<script>console.log($ipaddress)</script>";
        $sql = "INSERT INTO `login`(`email`, `Uname`,`ip`) VALUES ('$u','$name','$ipaddress')";
        $r = mysqli_query($con, $sql);
    ?>
        <h1>Welcome to Neighouring Nurse <?php echo $_SESSION['user_first_name'] . " " . $_SESSION['user_last_name']; ?></h1>
        <a href="logout.php">Log out</a>
<?php
    }
} else {
    header('location:login.php');
}

?>