<?php
session_start();
// Include Librari Google Client (API)
include_once 'libraries/google-client/Google_Client.php';
include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';
$client_id = '4184798756-6jhqmlguu1resrgi1n9ipjvjm9g2rs2o.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'http://localhost/barbershop/google.php'; // Callback URL
// Call Google API
$gclient = new Google_Client();
$gclient->setApplicationName('mozalucky'); // Set dengan Nama Aplikasi Kalian
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login
$google_oauthv2 = new Google_Oauth2Service($gclient);
?>