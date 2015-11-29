<?php
session_start();
include_once 'dbconnect.php';

/*if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}*/

if(isset($_POST['form-username']))
{

 $userName = mysql_real_escape_string($_POST['form-username']);
 $upass = mysql_real_escape_string($_POST['form-password']);

 echo $userName;

 $res=mysqli_query($conn, "SELECT * FROM m_users WHERE email_id=$userName");
 $row=mysql_fetch_array($res);
 echo $row;
 if(strcmp($row['pwd'], $upass) == 0)
 {
 	$_SESSION['user'] = $row['user_id'];
 	if($row['verified']==1)
 {
    header("Location: '../verified.html'");
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