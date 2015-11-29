<?php

session_start();

$firstName = $_SESSION['form-first-name'];
$lastName = $_SESSION['form-last-name'];
$mailId = $_SESSION['form-email'];
$password = $_SESSION['form-password'];
//$userName = $_SESSION['form-user-name'];
printf("uniqid(): %s\r\n", uniqid());
var_dump($_FILES);
$target_dir = "/Applications/MAMP/htdocs/Blinx/upload/".uniqid();

    if (move_uploaded_file($_FILES['name1']['tmp_name'], $target_dir)) {
        print "Received {$_FILES['fileToUpload']['name']} - its size is {$_FILES['userfile']['size']}";
    } else {
        print "Upload failed!";
    }

?>


