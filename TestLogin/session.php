<?php
   include('/home/pi/NOTEBOAT/config.inc.php');
   session_start();
   $db = mysqli_connect($database_host, $database_user, $database_pass, $database_name);

   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT userID FROM registeredUsers WHERE userID = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
