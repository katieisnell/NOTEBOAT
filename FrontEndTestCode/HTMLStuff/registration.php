<!DOCTYPE html>

<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    require("/home/pi/NOTEBOAT/config.inc.php");
    $conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

    if ($conn -> connect_error)
    {
      die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
    }
    
    $username = trim(strtolower($_POST['username']));
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = "";
    //check if they entered a personal email
    if (empty($_POST['email']))
    {
      $getEmailQuery = "SELECT * FROM allStudents WHERE `userID` = $username";
      
      $emailResult = mysqli_query($conn, $getEmailQuery);
      while ($row = mysqli_fetch_assoc($emailResult))
      {
        $email = $row["email"];
      }
      echo "YOUR UNI EMAIL IS " . $email;
    }
    else
    {
      $email = $_POST['email'];
    }
    $password = $_POST['password1'];
    $outputMessage;

  
    
    $checkUser = "SELECT * FROM allStudents WHERE `userID` = '$username'";
    $isRegQuery = "SELECT * FROM allStudents WHERE `userID` = '$username' AND `registered` = 1";
    $foundUser = $conn -> query($checkUser);
    $foundRegistered = $conn -> query($isRegQuery);
    $countFound = mysqli_num_rows($foundUser);
    $countReg = mysqli_num_rows($foundRegistered);

    if ($countFound == 1 && $foundRegistered == 0)
    {
      // Use the current time for our unique salt for each user
      $currentTime = time();
      $salt = hash('sha512', $username + $currentTime);
      
      // Then create a hashed password with the unique salt, we will have to compare hashed password and salt
      // each time the user logs in
      $hashPassword = hash('sha512', $password + $salt);


      $insertQuery = "INSERT INTO registeredUsers (`userID`, `prefFirstName`, `prefLastName`, `prefEmailAddress`, `password`, `salt`, `isVerified`)" 
                     . " VALUES ('$username', '$fname', ''$lname', '$email', '$hashPassword', '$salt', '1')";

      $insertSuccess = $conn -> query($insertQuery);
      echo $insertSuccess;
      echo "You have now boarded the NoteBoat!";
    }
    else if ($countFound == 1 && $foundRegistered == 1)
    {
      echo "Bruh you already registered!";
    }
    else if ($countFound == 0)
    {
      echo "You in the wrong territory bruh!";
    }
  }
  
?>

<html lang="en">
<head>

<!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta charset="utf-8">
<title>Registration </title>
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

<section class="navigation">
<div class="container">
<div class="row">
  <div id ="logo" class="three columns">
    <a href="index.html">
      <img class="u-full-width" src="images/logo2.png">
    </a>
  </div>
</div>
</div>
</section>

<section class="login">
  <div class="container">
  <h4>Create an account</h4>
  <form action="" method="post">

  <div class="row">
    <div class="four columns offset-by-two">
      <label for="userInput">Student Username</label>
      <input name= "username" class="u-full-width" type="text" placeholder="..." id="userInput" required>
    </div>
  </div>
    
  <div class="row">
    <div class="four columns offset-by-two">
      <label for="firstNameInput">First Name(s)</label>
      <input name= "fname" class="u-full-width" type="text" placeholder="..." id="firstNameInput" required>
    </div>

    <div class="four columns">
      <label for="lastNameInput">Last Name</label>
      <input name= "lname" class="u-full-width" type="text" placeholder="..." id="lastNameInput" required>
    </div>
  </div>

  <div class="row">
    <div class="eight columns offset-by-two">
      <label for="personalEmail">Use a different email to your Uni email?</label>
      <input name="checkBox" type="checkbox" id="chkbox" value="Yes" onclick="EnableDisableTextBox(this)"/>

      <label for="emailInput">Preferred email address</label>
      <input name= "email" class="u-full-width" type="email" placeholder="..." id="emailInput" disabled="disabled">
    </div>
  </div>

  <div class="row">
    <div class="four columns offset-by-two">
      <label for="passwordInput">Password</label>
      <input name= "password1" class="u-full-width" type="password" placeholder="..." id="passwordInput" required>
    </div>
    <div class="four columns">
      <label for="confirmPass">Confirm Password</label>
      <input name= "password2" class="u-full-width" type="password" placeholder="..." id="confirmPass" required>
    </div>
  </div>

  <div class="row">
     <div class="six columns offset-by-three">
       <button class="u-full-width" type="submit" style="margin-top:20px;">Register</button>
     </div>
  </div>  

</form>
</div>
</section>

<section class="footer">
<div class="container">
<div class="row">
  <div class="one column">One1</div>
  <div class="one column">One2</div>
  <div class="one column">One3</div>
  <div class="one column">One4</div>
  <div class="one column">One5</div>
  <div class="one column">One6</div>
  <div class="one column">One7</div>
  <div class="one column">One8</div>
  <div class="one column">One9</div>
  <div class="one column">One10</div>
  <div class="one column">One11</div>
  <div class="one column">One12</div>
</div>
</div>
</section>

</div>

<script type="text/javascript">
   function EnableDisableTextBox(chkEmail) {
       var txtEmailInput = document.getElementById("emailInput");
      txtEmailInput.disabled = chkEmail.checked ? false : true;
       if (!txtEmailInput.disabled) {
           txtEmailInput.focus();
       }
   }
</script>

<!--Script to make sure the same password is entered in confirm password fiel -->
<script>
var password = document.getElementById("passwordInput")
  , confirm_password = document.getElementById("confirmPass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
