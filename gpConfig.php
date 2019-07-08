<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '921666959945-8n9uvi5bf9d7spuntckknvjqtqhbf6vv.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'YzspCbvfL5S3tzM9vD9Yg3uN'; //Google client secret

$redirectURL = 'http://arpsharma.com/productsServices.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>