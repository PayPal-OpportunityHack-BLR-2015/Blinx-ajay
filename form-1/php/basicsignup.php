<?php

session_start();

$firstName = $_POST['form-first-name'];
$lastName = $_POST['form-last-name'];
$mailId = $_POST['form-email'];
$password = $_POST['form-password'];
$user_type = $_POST['optradio'];

//var_dump($_POST);

$_SESSION['form-first-name'] = $firstName;
$_SESSION['form-last-name'] = $lastName;
$_SESSION['form-email'] = $mailId;
$_SESSION['form-password'] = $password;
$_SESSION['user-type'] = $user_type;

//var_dump($_SESSION);
$redir_location = 'Location: ../../detailreg-user.php';
//$redir_location = 'Location: ../dbconnect.php';

header($redir_location);
die();
?>