<?php
session_start();
include_once 'dbconnect.php';

/*if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}*/

if(isset($_POST['form-username']))
{

 $userName = mysql_real_escape_string($_POST["form-username"]);
 $upass = mysql_real_escape_string($_POST["form-password"]);

 // var_dump($_POST);
 $query ="SELECT * FROM m_user WHERE email_id='".$userName."'";
 // echo $query;

 // echo $userName;
 // echo $upass;


 $res=mysqli_query($conn, $query);
 $row=mysqli_fetch_array($res);
 // var_dump($row);
 // echo $row['pwd'];
 // echo $upass;
 // var_dump($row);
 if(strcmp($row['pwd'], $upass) == 0)
 {
 	$_SESSION['user'] = $userName;
 	if($row['verified']==1)
 {
    header("Location: ../profile.php");
 }
 else{
    header("Location: ../unverified.html");
}
 }

 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>