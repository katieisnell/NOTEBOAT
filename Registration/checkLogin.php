<?php
$inputUserID = trim($_POST["userID"]);
$inputPassword = $_POST["password"];

if (login($inputUserID, $inputPassword))
{
  header("Location: /home.html");
}
else
{
  echo "Sorry wrong deets";
}


function login($inputUserID, $inputPassword)
{
  $loginGranted = false;
  require_once("/home/pi/NOTEBOAT/config.inc.php");

  $conn = new mysqli($database_host, $database_user, $database_pass,
                    $database_name);
  if ($conn -> connect_error)
  {
    die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
  }
  
  $checkLogin = "SELECT * FROM registeredUsers WHERE userID = '$inputUserID' AND password = '$inputPassword' AND isVerified = '1'";
  if (mysqli_num_rows($conn -> query($checkLogin)) > 0)
  {
    session_start();
    $_SESSION['userID'] = $inputUserID;
    $loginGranted = True;
  }
  else
  {
    $loginGranted = False;
  }
  return $loginGranted;                            
}
?>
