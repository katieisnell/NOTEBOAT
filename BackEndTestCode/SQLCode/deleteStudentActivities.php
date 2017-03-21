<html>

<!--
A program which stores an activity to the table studentActivities
It will only insert one activity at a time (for simplicty), so this php
file will have to be called multiple times if the user adds multiple
new activities (after they press save)
Using userID 'mbaxaks2' for testing; in the real product this userID will be
determined before

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

-->

<body>

<?php
  // if (isset($_POST['array'])) {
  // // echo "---".$_POST['array']."---";
  // // echo "<br>";
  // $studentActivitiesToDeleteArray = json_decode($_POST['array']);
  // // print_r($studentActivitiesToAddArray); //for debugging purposes only
  // }

  // for testing create an array to delete 2 student activities
  $studentActivitiesToDeleteArray = [
    [1, "IT MIGHJT WORK", 0, 12, "#000000"],
    [3, "test2", 1152, 12, "#000000"]
  ];



  // Will use in future: $userID = $_SESSION['userID'];
  $userID = 'mbaxaks2';


    for ($row = 0; $row < count($studentActivitiesToDeleteArray); $row++) {
      echo "<p><b>" . $userID . "'s activity shit to do $row</b></p>";
      echo "<ul>";
      for ($col = 0; $col < 5; $col++) {
        switch ($col) {
          case 0:
            echo "<li>Activity type: ".$studentActivitiesToDeleteArray[$row][$col]."</li>";
            $activityType = $studentActivitiesToDeleteArray[$row][$col];
            break;
          case 1:
            echo "<li>Activity name: ".$studentActivitiesToDeleteArray[$row][$col]."</li>";
            $activityName = $studentActivitiesToDeleteArray[$row][$col];
            break;
          case 2:
            echo "<li>Start time: ".$studentActivitiesToDeleteArray[$row][$col]."</li>";
            $activityName = $studentActivitiesToDeleteArray[$row][$col];
            break;
          case 3:
            echo "<li>Duration: ".$studentActivitiesToDeleteArray[$row][$col]."</li>";
            $duration = $studentActivitiesToDeleteArray[$row][$col];
            break;
          case 4:
            echo "<li>Colour: ".$studentActivitiesToDeleteArray[$row][$col]."</li>";
            $colour = $studentActivitiesToDeleteArray[$row][$col];
            break;
          default:
          echo "<li>".$studentActivitiesToDeleteArray[$row][$col]."</li>";
          }
      }
      echo "</ul>";
    }


  require_once('config.inc.php');
  $conn = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  for ($row = 0; $row < count($studentActivitiesToDeleteArray); $row++)
  {
    $activityType = $studentActivitiesToDeleteArray[$row][0];
    $activityName = $studentActivitiesToDeleteArray[$row][1];
    $startTime = $studentActivitiesToDeleteArray[$row][2];
    $duration = $studentActivitiesToDeleteArray[$row][3];
    $colour = $studentActivitiesToDeleteArray[$row][4];

    // SQL statement which deletes the record from the activities table
    $sqlDeleteActivity = "DELETE FROM studentActivities
                          WHERE userID='" . $userID . "' AND startTime=" . $startTime;

    echo $sqlDeleteActivity;
    $resultDeleteActivity = $conn->query($sqlDeleteActivity);

    if (mysqli_query($conn, $sqlDeleteActivity)) {
      echo "<script type='text/javascript'>alert('Records deleted successfully.');</script>";
	    // echo "Records deleted successfully.";
	  } else {
	    $errorMessage = "ERROR: Could not able to execute $sqlDeleteActivity. " . mysqli_error($conn);
      echo "<script type='text/javascript'>alert('$errorMessage');</script>";
    }

  }

  $conn->close();


  ?>

</body>
</html>
