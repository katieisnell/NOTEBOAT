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

  $sqlSelectCurrentWeekNo = sprintf("SELECT currentWeek
                                     FROM registeredUsers
                                     WHERE userID='%s'", mysqli_real_escape_string($conn, $userID));

  $resultSelectCurrentWeekNo = mysqli_query($conn, $sqlSelectCurrentWeekNo);

  $currentWeek;

  if (mysqli_num_rows($resultSelectCurrentWeekNo) > 0) {
    while($row = $resultSelectCurrentWeekNo->fetch_assoc()) {
      $currentWeek = $row['currentWeek'];

    }
  } else {
  echo "0 results from find current week no";
  }

  echo $currentWeek;

  $conn->close();



?>
</htmL>
