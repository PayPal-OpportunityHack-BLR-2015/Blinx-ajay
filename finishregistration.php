<?php

session_start();
include ("form-1/php/dbconnect.php");
$firstName = $_SESSION['form-first-name'];
$lastName = $_SESSION['form-last-name'];
$mailId = $_SESSION['form-email'];
$password = $_SESSION['form-password'];
//$userName = $_SESSION['form-user-name'];
printf("uniqid(): %s\r\n", uniqid());

$passwordToStore = md5($password);
$mobile_number = $_POST['form-mobile-number'];
$alternative_mobile_number = $_POST['form-alternate-mobile'];
$dob = $_POST['form-dob'];
$gender = $_POST['form-gender'];
$qualification = $_POST['form-qual'];
$institution = $_POST['form-inst'];
$occupation = $_POST['form-occ'];
$address = $_POST['form-add'];
$state = $_POST['form-state'];
//$pic = $_POST['form-pic'];
//$doc = $_POST['form-doc'];
$district = $_POST['form-dist'];
$location = $_POST['form-geo'];
$userId = explode("@", $mailId)[0];
$curDate = date("D M d Y G:i");



var_dump($_FILES);
$target_dir_profile = "/Applications/MAMP/htdocs/Blinx/upload/Profile".uniqid();

if(move_uploaded_file($_FILES['profilePic']['tmp_name'], $target_dir_profile)){
	    print "Received {$_FILES['profilePic']['name']} - its size is {$_FILES['profilePic']['size']}";
    } else {
        print "Upload failed!";
    }


$target_dir = "/Applications/MAMP/htdocs/Blinx/upload/".uniqid();

    if (move_uploaded_file($_FILES['name1']['tmp_name'], $target_dir)) {
        print "Received {$_FILES['name1']['name']} - its size is {$_FILES['name1']['size']}";
    } else {
        print "Upload failed!";
    }


$sqlQuery = "INSERT INTO `m_user`(`user_id`,`first_name`,`last_name`,`email_id`,`mobile_number`,`alternative_mobile_number`,`date_of_birth`,
	`gender`,`qualification`,`institution`,`occupation`,`state`,`district`,`location`,`address`,`document_path`,`picture_path`,`create_time`,
	`update_time`,`cud`,`verified`,`m_id`,`verifier_mid`,`pwd`) 
	values 
	('$userId','$firstName','$lastName','$mailId','$mobile_number',
	$alternative_mobile_number,'$dob','$gender','$qualification','$institution','$occupation','$state','$district','$location','$address','$target_dir','$target_dir_profile','$curDate',
	'$curDate','C',0,0,'1','$passwordToStore')";
echo $sqlQuery;
mysqli_query($conn,$sqlQuery);

/* commit transaction */
if (!$mysqli_query->commit()) {
    print("Transaction commit failed\n");
    exit();
}

?>


