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
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/skeleton.css">
  <link rel="stylesheet" href="../css/website.css">

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
      <a href="/NOTEBOAT/dashboard.html">
        <img class="u-full-width" src="images/logo2.png">
      </a>
    </div>

<div class="eight columns" style="text-align:center">
<h1>Note Sharing</h1>
</div>

    <div class="one column">
      <div class="dropdown">
         <button class="dropbtn">-----</button>
         <div class="dropdown-content">
         <a href="/NOTEBOAT/dashboard.html">TimeTable</a>
         <a href="/NOTEBOAT/NotesSharing/notesShare.php">Note Sharing</a>
		 <a href="/NOTEBOAT/NotesSharing/following.php">Following</a>
         <a href="/NOTEBOAT/settings.html">Settings</a>
         <a href="/NOTEBOAT/logout.php">Logout</a>
         </div>
      </div>
    </div>
</section>

<section class="table">
    <div class="container">

        <div class="row">
        <div class="ten columns offset-by-three">
        <style>
          table, td
          {
            border: 1px solid black;
          }
        </style>
          <table id="usersTable">
</table>
  </div>
  </div>
</div>
  </section>


<section class="idk">
<div class = "container">
<div class="row">
<div class="nine columns offset-by-two">
<script>
  function followingArray(followingString)
  {
    return followingString.split("-");
  } 

  function createRow(name, userID, following, thisUser)
  {
      var table = document.getElementById("usersTable");
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
  var table = document.getElementById("usersTable");
  var row = table.insertRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
 
  cell1.innerHTML = "Name";
  cell2.innerHTML = "Following";
}
</script>
  

<?php
$searchTerms = $_POST['search'];
$searchTermsArray = explode(' ', $searchTerms); 
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

$numberRows = 0;
while($row = $foundUsers->fetch_assoc())
{
    $fileOwner = $row["userID"];
    $name = $row["prefFirstName"] . " " . $row["prefLastName"];

if($searchTerms !== "")
{
  $searchMatch = TRUE;
  for($index = 0; $index < count($searchTermsArray); $index++)
  {
    if($searchMatch)
    {
       if(($searchTermsArray[$index] == $fileOwner) || ($searchTermsArray[$index] == $row["prefFirstName"] ) || ( $searchTermsArray[$index] == $row["prefLastName"])) 
         $searchMatch = TRUE;
       else if($searchMatch)
          $searchMatch = FALSE;
    }
   }
}
else
  $searchMatch = TRUE;
if($searchMatch)
{
  $numberRows = $numberRows + 1;
  echo '<script type="text/javascript"> createRow(\'' . $name . '\' , \'' . $fileOwner . '\'  , \''.  $following .'\'  , \''.  $thisUserID .'\');</script>';
}

}
 echo "<div class=\"container\">";
 echo "<div class=\"row\">";
if($numberRows > 0)
{
    echo '<script type="text/javascript"> addTableHeader(); </script>';
}
else
{
echo 'No users found. <br>';
}
echo 'To filter through users, search for usernames, first names and surnames here:';
echo "</div>";
echo "</div>";
?>

</div>
</div>
</div>
</section>

<section class="search">
    <div class="container">
<form action='followingSearch.php' method='post'>

<div class="row">
      <div class="nine columns offset-by-two" style="text-align:center">
        <input class="u-full-width" type="text" placeholder="Search " name="search"> 

        <input class="button" type="submit" value="Go" id="button" >
      </div>
</div>

</form>
</div>
</section>

 <section class="footer">
  <div class="container">
  <div class="row">
    <div id="navigation" class="twelve columns">
      <nav>
      <ul>
        <li><a href="http://10.2.238.64/NOTEBOAT/about.html">About</a></li>
        <li><a href="http://10.2.238.64/NOTEBOAT/contact.html">Contact Us</a></li>
        <li><a href="http://10.2.238.64/NOTEBOAT/termsAndConditions.html">Terms &amp; Conditions</a></li>
      </ul>
    </nav>
    </div>
  </div>
  </div>
  </section>

</body>
</html>

