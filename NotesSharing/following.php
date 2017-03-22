<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Follow Users</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/website.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/boat.png">

</head>
<body>

<div class="container">

  <section class="header">
  <div class="container">
  <div class="row">

    <div id ="logo" class="three columns">
      <a href="dashboard.html">
        <img class="u-full-width" src="images/logo2.png">
      </a>
    </div>

    <div class="one column offset-by-eight">
      <div class="dropdown">
         <button class="dropbtn">-----</button>
         <div class="dropdown-content">
         <a href="/NOTEBOAT/dashboard.html">TimeTable</a>
         <a href="/NOTEBOAT/NotesSharing/notesShare.php">Note Sharing</a>
		 <a href="#">Following</a>
         <a href="/NOTEBOAT/settings.html">Settings</a>
         <a href="/NOTEBOAT/logout.php">Logout</a>
         </div>
      </div>
    </div>

  </div>
  </div>
  </section>
<script>
  function followingArray(followingString)
  {
    return followingString.split("-");
  } 

  function createRow(name, userID, following, thisUser)
  {
      var table = document.getElementById("usersTable")
      var row = table.insertRow(0);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      cell1.innerHTML = name;
      cell2.innerHTML = "<form action='updatedFollowing.php' method='post'><input type='checkbox' name='following' value=yes /><input name='ID' value=" + userID + " readonly/><input type ='submit' value = 'submit'/></form>";

      var array = followingArray(following);
      for(index = 0; index < array.length; index++)
      {
          if(array[index] == userID)
          {
             cell2.innerHTML = "<form action='updatedFollowing.php' method='post'><input type='checkbox' name='following' value=yes checked = 'checked'/><input name='ID' value=" + userID + " readonly/><input type ='submit' value = 'submit'/></form>";
          }
          if(userID== thisUser)
          {
             cell2.innerHTML = "You can't follow yourself";
          }
      }
  }

  function addTableHeader()
  {
  var table = document.getElementById("usersTable")
  var row = table.insertRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
 
  cell1.innerHTML = "Name";
  cell2.innerHTML = "Following";
}
</script>
  <section class="table">
    <div class="container">

        <div class="row">
        <style>
          table, td
          {
            border: 1px solid black;
          }
        </style>
        </div></section>



          <table id="usersTable">
</table>

<?php
session_start();
require("/home/pi/NOTEBOAT/config.inc.php");
$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);
if($conn -> connect_error)
{
        die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error); 
}
$query = "SELECT userID, prefFirstName, prefLastName FROM registeredUsers";
$foundUsers = $conn -> query($query);
$numOfUsers = mysqli_num_rows($foundUsers);

$thisUserID = $_SESSION['login_user']; 

$followingQuery = "SELECT followingUsers FROM registeredUsers WHERE userID = '$thisUserID'"; 
$foundUsers2 = $conn -> query($followingQuery);
$thisUser = $foundUsers2 -> fetch_assoc();
$following = $thisUser["followingUsers"];
 echo '<script type="text/javascript"> var array = followingArray($followingUsersString);</script>';
while($row = $foundUsers->fetch_assoc())
{
    $fileOwner = $row["userID"];
    $name = $row["prefFirstName"] . " " . $row["prefLastName"];
               echo '<script type="text/javascript"> createRow(\'' . $name . '\' , \'' . $fileOwner . '\'  , \''.  $following .'\'  , \''.  $thisUserID .'\');</script>';
}
    echo '<script type="text/javascript"> addTableHeader(); </script>';
?>

</body>
</html>


