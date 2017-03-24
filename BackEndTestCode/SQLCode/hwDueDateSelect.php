<html>
<?php

  require_once('config.inc.php');
  $conn = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // The user we will be getting the details of; currently testing with mbaxaks2
  $userID = "mbaxaks2";

  $sqlSelectHwDueDate = sprintf("SELECT moduleID, hwDueDay
                                 FROM modulesEnrolled
                                 WHERE userID='%s'", mysqli_real_escape_string($conn, $userID));

  $resultSelectHwDueDate = mysqli_query($conn, $sqlSelectHwDueDate);

  $hwDueDayArray = array();

  if (mysqli_num_rows($resultSelectHwDueDate) > 0) {
    while($row = $resultSelectHwDueDate->fetch_assoc()) {
      array_push($hwDueDayArray, array($row['moduleID'], $row['hwDueDay']));

    }
  } else {
  echo "0 results from find hw due date";
  }

  print_r($hwDueDayArray);

  $conn->close();



?>
</htmL>
