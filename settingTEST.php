<html>
<body>
  <div> Personal Information 
    <div class="four columns offset-by-one">
      <label>First Name:</label>
      <input id="fname" class="u-full-width" type="text" name="search" disabled="disabled">
    </div>

    <div class="four columns offset-by-one">
      <label>Last Name:</label>
      <input id="lname" class="u-full-width" type="text" name="search" disabled="disabled">
    </div>

    <div class="four columns offset-by-one">
      <label>Email:</label>
      <input id="email" class="u-full-width" type="text" name="search" disabled="disabled">
    </div>

    <div class="four columns offset-by-one">
      <label>Travel Time</label>
      <input id="travelTime" class="u-full-width" type="text" placeholder="N/A" name="search" disabled="disabled">
    </div>

    <div class="row">
      <div class="six columns offset-by-three">
      <button id="editButton" class="u-full-width" type="submit" style="margin-top:20px;">Edit Details</button>
      </div>
    </div>  

    <div class="row">
      <div class="six columns offset-by-three">
      <button id="saveButton" class="u-full-width" type="submit" style="margin-top:20px;" disabled="disabled">Save Changes</button>
      </div>
    </div> 
      
  </div>
</body>
</html>

<script>
  function fillPersonalDetails(fname, lname, email, travelTime)
  {
    document.getElementById("fname").value = fname;
    document.getElementById("lname").value = lname;
    document.getElementById("email").value = email;
    document.getElementById("travelTime").value = travelTime;
  }

  function toggleEnable()
  {
    document.getElementById("fname").disabled = true ? false : true;
    document.getElementById("lname").disabled = true ? false : true;
    document.getElementById("email").disabled = true ? false : true;
    document.getElementById("travelTime").disabled = true ? false : true;
    document.getElementById("editButton").disabled = true ? false : true;
    document.getElementById("saveButton").disabled = true ? false: true;
  }

  
</script>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] != "POST")
{
  $userID = "mbaxask3";//$_SESSION['login_user'];
  
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

    echo '<script type="text/javascript"> fillPersonalDetails(\'' . $firstName . '\' , \'' . $lastName . '\' , \'' . $email . '\' , \'' . $travelTime . '\');</script>';
  }
  
}
else 
{
  
}
?>
