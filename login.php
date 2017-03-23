<?php
require("/home/pi/NOTEBOAT/config.inc.php");
session_start();
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form
  $conn = new mysqli($database_host, $database_user, $database_pass, $database_name);
  $inputUsername = trim(strtolower($_POST["username"]));
  $inputPassword = $_POST["password"];

//  $myusername = mysqli_real_escape_string($conn,$_POST['username']);
//  $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
  //check for errors before doing anything else
  if($conn -> connect_error)
  {
    die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
  }
  $checkLogin = "SELECT * FROM registeredUsers WHERE `userID` = '$inputUsername'";
  //AND WHERE password = '$inputPassword'";
  $result = $conn -> query($checkLogin);
  
  $row = mysqli_fetch_array($result);
//  $active = $row['active'];

  $count = mysqli_num_rows($result);
  
  $grantAccess = false;
  
  if ($count == 1)
  {
    $dbPassword = $row["password"];
    $dbSalt = $row["salt"];
    
    $hashPassword = hash('sha512', $inputPassword . $dbSalt);
     
    if ($hashPassword == $dbPassword)
    {
      $grantAccess = true;
    }
  }
  // If result matched $myusername and $mypassword, table row must be 1 row
  if($grantAccess)
  {
     //session_register("myusername");
     $_SESSION['login_user'] = $inputUsername;

    $setUpQuery = "SELECT userID FROM modulesEnrolled WHERE userID = '$inputUsername'";
    $foundUsers = $conn -> query($setUpQuery);
    $thisUser = $foundUsers -> fetch_assoc();

    if($thisUser['userID'] == "")
    {  
      header("location: startSetUp.php");
    }
    else
    {
     header("location: dashboard.html");
    }
  }
  else
  {
    $error = "Your Login Name or Password is invalid";
  }
echo '<script type="text/javascript"> alert(\'' . $error . '\'); </script>';
}
?>
<html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Note Boat</title>
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

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div class="container">

  <section class="header">
  <div class="container">
  <div class="row">

    <div id ="logo" class="six columns offset-by-three">
      <a href="dashboard.html">
        <img class="u-full-width" src="images/logo2.png">
      </a>
    </div>

  </div>
  </div>
  </section>

  <section class="login">
    <div class="container">
    <form action="login.php" method="post">

    <div class="row">
      <div class="six columns offset-by-three">
      <label>Username</label>
      <input class="u-full-width" type="text" placeholder="Enter Username" name="username" required>
      </div>
    </div>

    <div class="row">
      <div class="six columns offset-by-three">
        <label>Password</label>
        <input class="u-full-width" type="password" placeholder="Enter Password" name="password" required>
      </div>
    </div>

    <div class="row">
       <div class="six columns offset-by-three">
         <button class="u-full-width" type="submit">Login</button>
       </div>
    </div>
  </form>

  <div class="row">
     <div class="six columns offset-by-three">
       <a href="registration.php"><button class="u-full-width">Sign Up</button></a>
     </div>
  </div>


  </div>
  </section>

  <section class="footer">
  <div class="container">
  <div class="row">
    <div id="navigation" class="twelve columns">
      <nav>
      <ul>
        <li><a href="/NOTEBOAT/about.html">About</a></li>
        <li><a href="/NOTEBOAT/contact.html">Contact Us</a></li>
        <li><a href="/NOTEBOAT/termsAndConditions.html">Terms &amp; Conditions</a></li>
      </ul>
    </nav>
    </div>
  </div>
  </div>
  </section>

</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
