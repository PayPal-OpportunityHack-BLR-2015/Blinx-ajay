<?php
session_start();
include_once 'dbconnect.php';

/*if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}*/

if(isset($_POST['btn_signin']))
{
 $userName = mysql_real_escape_string($_POST['form-username']);
 $upass = mysql_real_escape_string($_POST['form-password']);
 $res=mysql_query("SELECT * FROM m_users WHERE user_id=$userName");
 $row=mysql_fetch_array($res);
 if($row['pwd']==md5($upass))
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