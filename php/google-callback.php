<?php
$client = new Google_Client();
$client->setAuthConfigFile('../client_secrets.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/Blinx/php/google-callback.php');
$client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
$client->addScope("https://www.googleapis.com/auth/userinfo.profile");
$client->addScope("https://www.googleapis.com/auth/userinfo.email");
$client->authenticate($_GET['code']);
$plus = new Google_Service_Plus($client);
$_SESSION['access_token'] = $client->getAccessToken();
$me = $plus->people->get("me");
print "<br>ID: {$me['id']}\n<br>";
print "Display Name: {$me['displayName']}\n<br>";
print "Image Url: {$me['image']['url']}\n<br>";
print "Url: {$me['url']}\n<br>";
$name3 = $me['name']['givenName'];
echo "Nombre: $name3 <br>"; //Everything works fine until I try to get the email
$correo = ($me['emails']['value']);
echo $correo;

