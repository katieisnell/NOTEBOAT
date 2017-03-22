<?php
session_start();
$nowFollowing = $_POST['following'];
$gonnaFollow = $_POST['ID'];
$loggedUser = $_SESSION['login_user'];
require("/home/pi/NOTEBOAT/config.inc.php");
$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);
if($conn -> connect_error)
{
        die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error); 

}
$followingQuery = "SELECT followingUsers FROM registeredUsers WHERE userID = '$loggedUser'"; 
$foundUsers2 = $conn -> query($followingQuery);
$thisUser = $foundUsers2 -> fetch_assoc();
$following = $thisUser["followingUsers"];

if(isset($nowFollowing))
{
$array = explode('-', $following);
$count = count($array);
$isFollowing = FALSE;
for($index = 0; $index < $count; $index++)
{
  if($array[$index] == $gonnaFollow)
    $isFollowing = TRUE;
}
if($isFollowing)
{ 
echo '<script type=text/javascript > alert("You are already following '. $gonnaFollow .  ' !"); window.location.href="following.php";</script>';
}
else
{
$following .= ("-" . $gonnaFollow);
$query = "UPDATE registeredUsers SET followingUsers = '$following' WHERE userID = '$loggedUser'";
    $added = $conn -> query($query);
echo '<script type=text/javascript > alert("You are now following '. $gonnaFollow .  '. We hope your friendSHIP lasts forever!"); window.location.href="following.php";</script>';
}
}
else
{
$array = explode('-', $following);
$count = count($array);
$isFollowing = FALSE;
for($index = 0; $index < $count; $index++)
{
if($array[$index] == $gonnaFollow)
  $isFollowing = TRUE;
}
if($isFollowing)
{
for($index = 0; $index < $count; $index++)
{
if($array[$index] == $gonnaFollow)
{   
   $array[$index] = "";
}
}
$following = "";
for($index = 0; $index <= $count; $index++)
{
  if($array[$index] !== "")
    $following .= ($array[$index] ."-");
} 
$query = "UPDATE registeredUsers SET followingUsers = '$following' WHERE userID = '$loggedUser'";
    $added = $conn -> query($query);
echo '<script type=text/javascript > alert("You just unfollowed '. $gonnaFollow .  '. Your friendSHIP has SAILED away!"); window.location.href="following.php";</script>';
}
else
echo '<script type=text/javascript > alert("You were never following '. $gonnaFollow .  '! Why not follow them and start a friendSHIP?"); window.location.href="following.php";</script>';
}

?>
