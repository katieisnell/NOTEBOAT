<html>
<head>
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<body>
  <div> Personal Information
    <form id="editButt" name="editButton" method="post" action="">
        <div class="four columns offset-by-one">
          <label>User ID:</label>
          <input id="userID" class="u-full-width" type="text" name="userID" readonly>
        </div>

        <div class="four columns offset-by-one">
          <label>First Name:</label>
          <input id="fname" class="u-full-width" type="text" name="fname" readonly>
        </div>

        <div class="four columns offset-by-one">
          <label>Last Name:</label>
          <input id="lname" class="u-full-width" type="text" name="lname" readonly>
        </div>

        <div class="four columns offset-by-one">
          <label>Email:</label>
          <input id="email" class="u-full-width" type="text" name="email" readonly>
        </div>


    </form>

    <button id="changePword">CHANGE PASSWORD</button>
    <button id="mybtn">EDIT DETAILS</button>

    <div id="passwordPopup" class="modal">
      <div class="modal-content">
        <span id="pwordSpan" class="close">&times;</span>
        <h3>CHANGE PASSWORD</h3>
        <form name="changePassword" method="post" action="">
          <label for="oldPword" class="ui-hidden-accessible">Current Password:</label>
          <input type="password" name="currPword" id="cpwd" placeholder="Password" required><br>
          <label for="newPword" class="ui-hidden-accessible">New Password:</label>
          <input type="password" name="newPword" id="npwd" placeholder="New password" required><br>
          <label for="newCPword" class="ui-hidden-accessible">Confirm New Password:</label>
          <input type="password" name="newCPword" id="nCpwd" placeholder="Confirm New password" required><br>
          <input type="submit" value="UPDATE">
        </form>
      </div>
    </div>

    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span id="editSpan" class="close">&times;</span>
        <h3>EDIT DETAILS</h3>
        <form name="saveChanges" method="post" action="">
            <label for="usrnm" class="ui-hidden-accessible">First Name:</label>
            <input type="text" name="ufname" id="newfname" placeholder="First Name" required><br>
            <label for="ln" class="ui-hidden-accessible">Last Name:</label>
            <input type="text" name="ulname" id="newlname" placeholder="Last Name" required><br>
            <label for="ln" class="ui-hidden-accessible">Email:</label>
            <input type="text" name="uemail" id="newemail" placeholder="Email" required><br>
            <input type="submit" data-inline="true" value="SAVE">
        </form>
      </div>
    </div>

    <script>

    var popup = document.getElementById('myModal');

    var btn = document.getElementById('mybtn');
    var span = document.getElementById('editSpan');

    //var span = document.getElementsByClassName("close")[0];

    var popup1 = document.getElementById('passwordPopup');

    var btn1 = document.getElementById('changePword');

    var span1 = document.getElementById('pwordSpan');

    var password = document.getElementById("npwd")
      , confirm_password = document.getElementById("nCpwd");

    function validatePassword()
    {
      if(password.value != confirm_password.value)
      {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    </script>

</body>
</html>

 <script>
  //The EDIT DETAILS BUTTON BEING CLICKEd
  btn.onclick = function()
  {
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    //fillPersonalDetailsPopup(userID, fname, lname, email, travelTime);
    popup.style.display = "block";
  }
  //Onclick for the change password button
  btn1.onclick = function()
  {
    //fillPersonalDetailsPopup(userID, fname, lname, email, travelTime);
    popup1.style.display = "block";
  }

  span.onclick = function()
  {
    popup.style.display = "none";
  }

  span1.onclick = function()
  {
    popup1.style.display = "none";
  }


  window.onclick = function(event)
  {
    if (event.target == popup){
      popup.style.display = "none";
    }
  }

  window.onclick = function(event)
  {
    if (event.target == popup1){
      popup1.style.display = "none";
    }
  }

  function fillPersonalDetailsPopup(fname, lname, email, travelTime)
  {
    //alert("in pop up");
    document.getElementById("ufname").value = fname;
    document.getElementById("ulname").value = lname;
    document.getElementById("uemail").value = email;
  }

  function fillPersonalDetails(userID, fname, lname, email, travelTime)
  {
    document.getElementById("userID").value = userID;
    document.getElementById("fname").value = fname;
    document.getElementById("lname").value = lname;
    document.getElementById("email").value = email;
  }

</script>

<?php
session_start();

$userID = $_SESSION['login_user'];

require("/home/pi/NOTEBOAT/config.inc.php");
$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

if($conn -> connect_error)
{
   die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
}

$query = "SELECT * FROM registeredUsers WHERE userID = '$userID'";
$queryResult = $conn -> query($query);

if ($queryResult -> num_rows == 1)
{
  $row = $queryResult->fetch_assoc();
  $firstName = $row["prefFirstName"];
  $lastName = $row["prefLastName"];
  $email = $row["prefEmailAddress"];

  echo '<script type="text/javascript"> fillPersonalDetails(\'' . $userID . '\' , \'' . $firstName . '\' , \'' . $lastName . '\' , \'' . $email . '\');</script>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $loggedInUser = $_SESSION['login_user'];
  if (isset($_POST["fname"]))
  {

  }
  else if (isset($_POST["ufname"]))
  {
    saveChanges($_POST["ufname"], $_POST["ulname"], $_POST["uemail"]);
  }
  else if (isset($_POST['newPword']))
  {
    $pwordQuery = "SELECT * FROM registeredUsers WHERE `userID` = '$loggedInUser'";
    $pwordResult = $conn -> query($pwordQuery);

    $row = mysqli_fetch_array($pwordResult);
    $count = mysqli_num_rows($pwordResult);
    echo "COUNT: " . $count;
    if ($count == 1)
    {
      $dbPassword = $row["password"];
      $dbSalt = $row["salt"];
      $hashPassword = hash('sha512', $_POST["currPword"] . $dbSalt);

      if ($hashPassword == $dbPassword)
      {
        $currentTime = time();
        $newSalt = hash('sha512', $loggedInUser . $currentTime);

        // Then create a hashed password with the unique salt, we will have to compare hashed password and salt
        // each time the user logs in
        $newHashPassword = hash('sha512', $_POST["newPword"] . $newSalt);

        $newPwordQuery = "UPDATE registeredUsers SET `password` = '$newHashPassword' , `salt` = '$newSalt' WHERE `userID` = '$loggedInUser'";
        $insertResult = $conn -> query($newPwordQuery);
        echo '<script type="text/javascript"> alert("Password Updated!"); </script>';
      }
      else
      {
        echo '<script type="text/javascript"> alert("The current password doesnt match. Try again!"); </script>';
      }
    }
  }
}

function saveChanges($fname, $lname, $email)
{
  //echo '<script type="text/javascript"> toggleEnable(); </script>';
  $userID = $_SESSION['login_user'];
  $newfName = $_POST["ufname"];
  $newlName = $_POST["ulname"];
  $newEmail = $_POST["uemail"];

  require("/home/pi/NOTEBOAT/config.inc.php");
  $conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

  if($conn -> connect_error)
  {
     die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
  }

  $insertQuery = "UPDATE registeredUsers SET `prefFirstName`='$newfName', `prefLastName`='$newlName' , `prefEmailAddress`='$newEmail' WHERE userID = '$userID'";
  $result = $conn -> query($insertQuery);

  echo '<script type=text/javascript /> alert("UPDATED INFO!"); </script>';
}

?>

