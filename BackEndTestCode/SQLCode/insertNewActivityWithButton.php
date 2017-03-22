<?php


// A program which stores an activity to the table student activities
// It will only insert one activity at a time (for simplicty), so this php
// file will have to be called multiple times if the user adds multiple
// new activities (after they press save)
// Using userID 'mbaxaks2' for testing; in the real product this userID will be
// determined before
//
// <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

require_once('config.inc.php');
$conn = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['array'])) {
// echo "---".$_POST['array']."---";
// echo "<br>";
 $studentActivitiesToAddArray = json_decode($_POST['array']);
// print_r($studentActivitiesToAddArray); //for debugging purposes only
// Will use in future -> $userID = $_SESSION['userID'];
$userID = 'mbaxaks2';




for ($row = 0; $row < count($studentActivitiesToAddArray); $row++)
{
  $activityType = $studentActivitiesToAddArray[$row][0];
  $activityName = $studentActivitiesToAddArray[$row][1];
  $startTime = $studentActivitiesToAddArray[$row][2];
  $duration = $studentActivitiesToAddArray[$row][3];
  $colour = $studentActivitiesToAddArray[$row][4];

  // SQL statement which gets the student's course
  $sqlInsertNewActivity = "INSERT INTO studentActivities (userID, activityType, activityName, startTime, duration, colour)
                         VALUES('" . $userID . "', " . $activityType . ", '" . $activityName . "', " . $startTime . ", " . $duration . ", '" . $colour . "')";

  $resultInsertNewActivity = $conn->query($sqlInsertNewActivity);

  if(mysqli_query($conn, $sqlInsertNewActivity)) {

    echo "<script type='text/javascript'>alert('Records inserted successfully.');</script>";
    // echo "Records inserted successfully.";
  } else {
    $errorMessage = "ERROR: Could not able to execute $sqlInsertNewActivity. " . mysqli_error($conn);
    echo "<script type='text/javascript'>alert('$errorMessage');</script>";
  }
}




}



if (isset($_POST['arrayRemoving'])) {
// echo "---".$_POST['array']."---";
// echo "<br>";
$studentActivitiesToDeleteArray = json_decode($_POST['array']);
// print_r($studentActivitiesToAddArray); //for debugging purposes only

// Will use in future: $userID = $_SESSION['userID'];
$userID = 'mbaxaks2';



for ($row = 0; $row < count($studentActivitiesToDeleteArray); $row++)
{
  //$activityType tudentActivitiesToDeleteArray[$row][2];
  //$duration = $studentActivitiesToDeleteArray[$row][3];
  //$colour = $studentActivitiesToDeleteArray[$row][4];

  // SQL statement which deletes the record from the activities table
  $sqlDeleteActivity = "DELETE FROM studentActivities
                        WHERE userID='" . $userID . "' AND startTime=" . $startTime;

  $resultDeleteActivity = $conn->query($sqlDeleteActivity);

  // if (mysqli_query($conn, $sqlDeleteActivity)) {
  //   echo "<script type='text/javascript'>alert('Records deleted successfully.');</script>";
 //   // echo "Records deleted successfully.";
 // } else {
 //   $errorMessage = "ERROR: Could not able to execute $sqlDeleteActivity. " . mysqli_error($conn);
  //   echo "<script type='text/javascript'>alert('$errorMessage');</script>";
  // }

}





$conn->close();
  ?>

  <script> window.location="timetable.php" </script>
