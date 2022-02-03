<?php
//config.php

//Include Google Client Library for PHP autoload file
require_once '../../vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('231554672595-s64on8aajclp9uo2eph849hnbqghdjqj.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('x8xOrFHwBOa-PQfUb7kxR2Is');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Project/NN/patient/login/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>