<html>
<!--
A program which stores an activity to the table studentActivities
It will only insert one activity at a time (for simplicty), so this php
file will have to be called multiple times if the user adds multiple
new activities (after they press save)
Using userID 'mbaxaks2' for testing; in the real product this userID will be
determined before
-->

<body>

<!-- javascript array below -->



<?php

    //function insertToTable() {

    






 // $array = json_decode($_POST['array']);
//    print_r($array); //for debugging purposes only
/*
  $array = json_decode($_POST['array']);
    print_r($array); //for debugging purposes only
*/
     $response = array();
   /*  if(isset($array[$blah])) */
        $response['reply']="Success";/*
    else 
        $response['reply']="Failure";
*/
   echo json_encode($response);










/*

       // Will use in future -> $userID = $_SESSION['userID'];
    $userID = 'mbaxaks2';    



    for ($row = 0; $row < count($array); $row++) {
      echo "<p><b>" . $userID . "'s activity shit to do $row</b></p>";
      echo "<ul>";
      for ($col = 0; $col < 5; $col++) {
        switch ($col) {
          case 0:
            echo "<li>Activity type: ".$array[$row][$col]."</li>";
            $activityType = $array[$row][$col];
            break;
          case 1:
            echo "<li>Activity name: ".$array[$row][$col]."</li>";
            $activityName = $array[$row][$col];
            break;
          case 2:
            echo "<li>Start time: ".$array[$row][$col]."</li>";
            $startTime = $array[$row][$col];
            break;
          case 3:
            echo "<li>Duration: ".$array[$row][$col]."</li>";
            $duration = $array[$row][$col];
            break;
          case 4:
            echo "<li>Colour: ".$array[$row][$col]."</li>";
            $colour = $array[$row][$col];
            break;
          default:
          echo "<li>".$array[$row][$col]."</li>";
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

        $conn->close();
    
    */
  ?>



 <button type="button">Click to pass array to php</button> 



</body>



</html>
