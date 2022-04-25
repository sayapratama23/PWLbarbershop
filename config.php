<?php
require_once "google-api/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("898075615938-cbng3c1aq41mce55m5f5sbs5k2mbb51t.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Barber");
$gClient->setRedirectUri("http://localhost/barbershop/controller.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();
?>