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
          <input id="lname" class="u-full-width" type="label" name="lname" readonly>
        </div>

        <div class="four columns offset-by-one">
          <label>Email:</label>
          <input id="email" class="u-full-width" type="text" name="email" readonly>
        </div>

        <div class="four columns offset-by-one">
          <label>Travel Time</label>
          <input id="travelTime" class="u-full-width" type="text" placeholder="N/A" name="travelTime" readonly>
        </div>

        <div class="row">
          <div class="six columns offset-by-three" data-role="main">
          <a href="#myPopup" data-rel="popup" class="u-full-width">EDITPOP</a>
          <button id="editButton"  class="u-full-width" type="submit" style="margin-top:20px;">Edit Details</button>
          </div>
        </div>  
    </form>


    
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>
        <form name="saveChanges" method="get" action="">
          <div class="pop-up-content">
            <h3>EDIT DETAILS</h3>
            <span class="close">&times;</span>
            <label for="usrnm" class="ui-hidden-accessible">First Name:</label>
            <input type="text" name="ufname" id="usrnm" placeholder="First Name">
            <label for="ln" class="ui-hidden-accessible">Last Name:</label>
            <input type="text" name="ulname" id="pswd" placeholder="Last Name">
          
            <input type="submit" data-inline="true" value="SAVE">
          </div>
        </form> 
      </div>
    
    </div>

    <button id="mybtn">OPEN POP UP</button>
    <script> 
    var popup = document.getElementById('myModal');

    var btn = document.getElementById('mybtn');

    var span = document.getElementsByClassName("close")[0];
    </script>
      <!-- <div class="row">
        <div class="six columns offset-by-three">
        <input name="save" type="hidden">
        <button id="saveButton" class="u-full-width" type="submit" style="margin-top:20px;" disabled="disabled" form="editButt">Save Changes</button>
        </div>
      </div>  -->
  
</body>
</html>

 <script>


  btn.onclick = function() {
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
    
  function fillPersonalDetails(userID, fname, lname, email, travelTime)
  {
    document.getElementById("userID").value = userID;
    document.getElementById("fname").value = fname;
    document.getElementById("lname").value = lname;
    document.getElementById("email").value = email;
    document.getElementById("travelTime").value = travelTime;
  }

  function toggleEnable()
  {
    document.getElementById("fname").readOnly = true ? false : true;
    document.getElementById("lname").readOnly = true ? false : true;
    document.getElementById("email").readOnly = true ? false : true;
    document.getElementById("travelTime").readOnly = true ? false : true;
    document.getElementById("editButton").disabled = true ? false : true;
    document.getElementById("saveButton").disabled = true ? false: true;
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
  $travelTime = $row["travelTime"];

  echo '<script type="text/javascript"> fillPersonalDetails(\'' . $userID . '\' , \'' . $firstName . '\' , \'' . $lastName . '\' , \'' . $email . '\' , \'' . $travelTime . '\');</script>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (isset($_POST["fname"]))
  {
    echo "POSR";
    editDetails();
  
  }
  else if (isset($_POST["save"]))
  {
    echo "IN SAVE!";
    saveChanges();
  }
}

function editDetails()
{
  echo '<script type="text/javascript"> toggleEnable();</script>';
}

function saveChanges()
{
  echo '<script type="text/javascript"> toggleEnable(); </script>';
  $userID = $_POST["userID"];
  $newfName = $_POST["fname"];
  $newlName = $_POST["lname"];
  $newEmail = $_POST["email"];
  $newTravelTime = $_POST["travelTime"];


  require("/home/pi/NOTEBOAT/config.inc.php");
  $conn = new mysqli($database_host, $database_user, $database_pass, $database_name);
  
  if($conn -> connect_error)
  {
     die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
  }
  
  $insertQuery = "UPDATE registeredUsers SET `prefFirstName`='$newfName', `prefLastName`='$newlName' , `prefEmailAddress`='$newEmail' , `travelTime`='$newTravelTime' WHERE userID = '$userID'";
  $result = $conn -> query($insertQuery);
  
  echo '<script type=text/javascript /> alert("UPDATED INFO!"); </script>';
}


?>
