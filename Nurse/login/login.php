<html>

<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';

if (isset($_GET["code"])) {

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


    if (!isset($token['error'])) {

        $google_client->setAccessToken($token['access_token']);


        $_SESSION['access_token'] = $token['access_token'];


        $google_service = new Google_Service_Oauth2($google_client);


        $data = $google_service->userinfo->get();


        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['user_email_address'] = $data['email'];
        }

        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }

        if (!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }

        header('location:home.php');
    }
}


if (!isset($_SESSION['access_token'])) {

    $login_button = '<a href="' . $google_client->createAuthUrl() . '" role="button" style="text-transform:none" class="btn btn-outline-dark">
    <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
    Login With Google
    </a>';
}

?>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>

        h3{
            font-size: 20px;
            color: blue;
            text-align: center;
        }

        body {
            margin: 0;
            overflow: hidden;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgb(230, 235, 235);
        }

        * {
            box-sizing: border-box;
        }

        .main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding-top: 100px;
        }

        .form {
            width: 350px;
            padding: 35px;
            background-color: white;
            border: 1px solid lightgray;
        }

        .form1 {
            width: 350px;
            padding: 25px;
            background-color: white;
            border: 1px solid lightgray;
            text-align: center;
        }

        .tb1 {
            width: 100%;
        }

        .btn {
            border-radius: 6px;
            width: 100%;
            padding: 10px;
            border: none;
            background-color: blue;
            color: white;
            letter-spacing: 1px;
        }

        .btn:hover {
            background-color: rgb(10, 10, 192);
        }

        h1 {
            color: black;
            text-align: center;
        }

        .col {
            color: black;
            text-align: center;
        }

        .col1 {
            text-align: right;
        }

        .txt {
            border-radius: 4px;
            width: 100%;
            padding: 10px;
            border: 1px solid rgb(235, 232, 232);
            background-color: rgb(235, 232, 232);
            color: grey;
        }

        span {
            position: relative;
        }

        span:after {
            content: '';
            position: absolute;
            width: 110px;
            height: 2px;
            background-color: lightgray;
            left: -120px;
            top: 10px;
        }

        span:before {
            content: '';
            position: absolute;
            width: 110px;
            height: 2px;
            background-color: lightgray;
            right: -120px;
            top: 10px;
        }

        .text {
            top: 400px;
            left: 400px;
            text-align: center;
        }

        .header1 {
            width: 100%;
            border-bottom: 1px solid rgb(6, 161, 163);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            background-color: rgb(6, 161, 163);
        }

        .header1 a {
            padding: 20px 30px;
            color: black;
            text-decoration: none;
            transition: .5s;
        }

        .header1 span a:hover {
            background-color: #ddd;
            color: rgb(6, 161, 163);
            font-weight: bold;
        }

        .header span {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<?php


if (isset($_SESSION['u'])) {
    header('location:../demo.php');
}

if (isset($_POST['sub'])) {
    $user = $_POST['uname'] . trim(" ");
    $p = $_POST['pass'];
    $p = md5($p);
    $u = md5($user);

    include '../connect.php';
    if ($con) {
        $sql = "select * from `requested_nurse` where email='$u' and password='$p'";

        $r = mysqli_query($con, $sql);
        try {
            if ($r) {
                $a = mysqli_fetch_assoc($r);
                if ($a) {
                    if ($a['Approval_status'] == 0) {                   
                        header('location:../demo.php');
                    }else{
                        echo "Approved";
                    }
                } else {
                    echo "<script>alert('No Such Nusre')</script>";
                }
            }else{
                die("Query Problem!!");
            }
        } catch (Exception $e) {
            echo "There is Technical Problem ";
        }
    }
}
?>


<body>
    <div class="main">
        <form class="form" method="POST">
            <table class="tb1">
                <tr>
                    <td>
                        <h1>LOGIN</h1>
                        <h3>As Nurse</h3>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input type="mail" placeholder="Email Address" class="txt" name="uname" required></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Password" class="txt" name="pass" required></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <td>
                    <input type="submit" style="background-color: rgba(63,187,192,255);" value="Log In" class="btn" name="sub">
                </td>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center" style="color: rgb(214, 208, 208);"><span><b>OR</b></span></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo $login_button;
                        ?>
                    </td>
                </tr>

                </td>
                </tr>
                <td class="col1">
                    <br>
                    <a href="#" class="col1">Forgot Password?</a>
                </td>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Don't have an account ?&nbsp;<a href="../Nurse_signup/conditions.php">Sign Up</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>