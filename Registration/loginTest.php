<?php  //Start the Session
session_start();
	require("/home/pi/NOTEBOAT/config.inc.php");
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['userID']) and isset($_POST['password']))
{
  //3.1.1 Assigning posted values to variables.
  $username = $_POST['userID'];
  $password = $_POST['password'];
  //3.1.2 Checking the values are existing in the database or not
  $connection = new mysqli($database_host, $database_user, $database_pass,
                    $database_name);
  $query = "SELECT * FROM registeredUsers WHERE userID='$username' AND password='$password' AND isVerified='1'";

  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);
  //3.1.2 If the posted values are equal to the database values, then session will be created for the user.
  if ($count == 1)
  {
    $_SESSION['userID'] = $username;
  }
  else
  {
    //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
    $fmsg = "Invalid Login Credentials.";
  }
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['userID']))
{
  $username = $_SESSION['userID'];
  echo "Hello " . $username;
  echo "Welcome Aboard!";
  echo "<a href='logout.php'>Logout</a>";
}
else
{
  //3.2 When the user visits the page first time, simple login form will be displayed.
  ?>
  <html>
  <head>
  	<title>User Login Using PHP & MySQL</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

  <link rel="stylesheet" href="styles.css" >

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container">
        <form class="form-signin" method="POST">
        <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
          <h2 class="form-signin-heading">Please Login</h2>
          <div class="input-group">
  	  <span class="input-group-addon" id="basic-addon1">@</span>
  	  <input type="text" name="username" class="form-control" placeholder="Username" required>
  	</div>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
        </form>
  </div>

  </body>

  </html>
  <?php
}
?>

