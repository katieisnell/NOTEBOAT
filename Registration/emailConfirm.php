<?php
require "config.inc.php";

$conn = new mysqli($database_host, $database_user, $database_pass,
                   $database_name);
//check for errors in the connection with sql
if ($conn -> connect_error)
{
  die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
}//if
$userID = $_GET['userID'];
$code = $_GET['confirmCode'];

$query =  "SELECT * FROM Users WHERE userID = $userID AND confirmCode = '$code'";
$validCode = $conn -> query($query);

if (mysqli_num_rows($validCode) > 0)
{
  $theStudent = mysql_fetch_array($validCode);
  $dbCode = $theStudent['confirmCode'];
  if ($dbCode == $code)
  {
    $conn -> query("UPDATE Users SET confirmCode = '0', verified = '1' WHERE "
                   . "userID = $userID");
    echo "Thank you! Your email has been verified. You can now login!";
  }
}
else
{
  echo "invalid link";
}
