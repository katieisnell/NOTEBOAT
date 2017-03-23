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

        <div class="row">
          <div class="six columns offset-by-three" data-role="main">
          <button id="editButton"  class="u-full-width" type="submit" style="margin-top:20px;">Edit Details</button>
          </div>
        </div>
    </form>

    <button id="changePword">CHANGE PASSWORD</button>

    <div id="passwordPopup" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h3>CHANGE PASSWORD</h3>
        <form name="changePassword" method="post" action="">
          <label for="oldPword" class="ui-hidden-accessible">Current Password:</label>
          <input type="password" name="currPword" id="cpwd" placeholder="Password" required>
          <label for="newPword" class="ui-hidden-accessible">New Password:</label>
          <input type="password" name="newPword" id="npwd" placeholder="New password" required>
          <label for="newCPword" class="ui-hidden-accessible">Confirm New Password:</label>
          <input type="password" name="newCPword" id="nCpwd" placeholder="Confirm New password" required>
        </form>
      </div>
    </div>

    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <h3>EDIT DETAILS</h3>
        <form name="saveChanges" method="post" action="">
            <label for="usrnm" class="ui-hidden-accessible">First Name:</label>
            <input type="text" name="ufname" id="newfname" placeholder="First Name" required>
            <label for="ln" class="ui-hidden-accessible">Last Name:</label>
            <input type="text" name="ulname" id="newlname" placeholder="Last Name" required>
            <label for="ln" class="ui-hidden-accessible">Email:</label>
            <input type="text" name="uemail" id="newemail" placeholder="" required>
            <input type="submit" data-inline="true" value="SAVE">
        </form>
      </div>

    </div>

    <button id="mybtn">OPEN POP UP</button>

    <script>

    var popup = document.getElementById('myModal');

    var btn = document.getElementById('mybtn');

    var span = document.getElementsByClassName("close")[0];

    var popup1 = document.getElementById('passwordPopup');

    var btn1 = document.getElementById('changePword');

    var span1 = document.getElementsByClassName("close")[0];
    alert("YO");
    // var password = document.getElementById("npwd")
    //   , confirm_password = document.getElementById("nCpwd");
    //
    // function validatePassword(){
    //   if(password.value != confirm_password.value) {
    //     confirm_password.setCustomValidity("Passwords Don't Match");
    //   } else {
    //     confirm_password.setCustomValidity('');
    //   }
    // }
    //
    // password.onchange = validatePassword;
    // confirm_password.onkeyup = validatePassword;

    </script>

</body>
</html>

 <script>

  btn.onclick = function(){
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    //fillPersonalDetailsPopup(userID, fname, lname, email, travelTime);
    popup.style.display = "block";
  }

  span.onclick = function() {
    popup.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == popup){
      popup.style.display = "none";
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

  // function toggleEnable()
  // {
  //   document.getElementById("fname").readOnly = true ? false : true;
  //   document.getElementById("lname").readOnly = true ? false : true;
  //   document.getElementById("email").readOnly = true ? false : true;
  //   document.getElementById("travelTime").readOnly = true ? false : true;
  //   document.getElementById("editButton").disabled = true ? false : true;
  //   document.getElementById("saveButton").disabled = true ? false: true;
  // }

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
  if (isset($_POST["fname"]))
  {

  }
  else if (isset($_POST["ufname"]))
  {
    echo "UPDATE SHIZ MOFO!";
    echo  $_SESSION['login_user'];
    echo  $_POST["ufname"];
    echo  $_POST["ulname"];
    echo  $_POST["uemail"];
    saveChanges($_POST["ufname"], $_POST["ulname"], $_POST["uemail"]);

  }

}
// function editDetails()
// {
//   //echo '<script type="text/javascript"> toggleEnable();</script>';
// }

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

