<?php

    include '../../connect.php';

    unset($_SESSION['admin_profile']);

    header('location:req_nurses.php');

?>