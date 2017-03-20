<html>
<!--
A program which gets (for now) gets the student's uni timetable from the
database
I am assuming they are registered and therefore will query the
'registeredUsers' table to find the details
Will be using html for testing
Using userID 'mbaxaks2' for testing; in the real product this userID will be
determined before
-->

<body>

  <?php

    require_once('config.inc.php');
    $conn = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // The user we will be getting the details of; currently testing with mbaxaks2
    $userID = "mbaxaks2";

    // SQL statement which gets the student's course
    $sqlFindCourse = "SELECT courseID, schoolYear FROM registeredUsers WHERE userID='" . $userID . "'";

    $resultFindCourse = $conn->query($sqlFindCourse);

    if ($resultFindCourse->num_rows > 0) {
      while($row = $resultFindCourse->fetch_assoc()) {
        $courseID = $row['courseID'];
        $schoolYear = $row['schoolYear'];
      }
    } else {
    echo "0 results from find course";
    }


    // Now we have the modules they can do, we have to find out more specific details about each module
    // Basically have to figure out what is mandatory, what semster the modules happen in
    $sqlFindMandatoryModules = "SELECT courseTimetable.moduleID, moduleInfo.isMandatory,
                                                             moduleInfo.semesterNo, moduleClasses.classSemesterNo,  moduleClasses.startTime, moduleClasses.duration,
                                                             moduleClasses.weekNo, moduleClasses.location, moduleClasses.className
                                                             FROM courseTimetable
                                                             LEFT JOIN moduleInfo ON courseTimetable.moduleID=moduleInfo.moduleID
                                                             LEFT JOIN moduleClasses on courseTimetable.moduleID=moduleClasses.moduleID
                                                             WHERE courseTimetable.courseID='" . $courseID . "' AND courseTimetable.schoolYear='"
                                                                                                                                                                 . $schoolYear . "'";


    $resultFindMandatoryModules = mysqli_query($conn, $sqlFindMandatoryModules);

    // 2D arrays which store: (moduleID, semesterNo, start time of lec, duration of it, what weekno the lec is on, the location,
    // and the class name which will be the output to the user of what it is)
    $mandatoryModulesArray  = array();

    if (mysqli_num_rows($resultFindMandatoryModules) > 0) {
      while($row = $resultFindMandatoryModules->fetch_assoc()) {

        if ($row['isMandatory'] == 1) {
          array_push($mandatoryModulesArray, array($row['moduleID'], $row['semesterNo'],
                                                                                          $row['classSemesterNo'], $row['startTime'],
                                                                                          $row['duration'], $row['weekNo'], $row['location'], $row['className']));
        }

      }
    } else {
    echo "0 results from find mandatory modules";
    }

    // Need to find what optional modules the user take by using INNER JOIN
    $sqlUserOptionalModules = "SELECT moduleInfo.moduleID
                                                     FROM moduleInfo
                                                     INNER JOIN modulesEnrolled
                                                     ON moduleInfo.moduleID=modulesEnrolled.moduleID
                                                     WHERE modulesEnrolled.userID='" . $userID . "' AND moduleInfo.isMandatory=0";

    // Store the optionals the user takes
    $userOptionalModulesArray  = array();

    $resultUserOptionalModules = mysqli_query($conn, $sqlUserOptionalModules);

    if (mysqli_num_rows($resultUserOptionalModules) > 0) {
      while($row = $resultUserOptionalModules->fetch_assoc()) {

          array_push($userOptionalModulesArray, $row['moduleID']);

      }
    } else {
      echo "0 results from find optional modules";
    }

    // Find out details of all the optionals the user takes
    for ($index = 0; $index < count($userOptionalModulesArray); $index++) {
      $moduleID = $userOptionalModulesArray[$index];
      $sqlOptionalDetailsModules = "SELECT moduleInfo.semesterNo, moduleClasses.classSemesterNo,  moduleClasses.startTime, moduleClasses.duration,
                                                             moduleClasses.weekNo, moduleClasses.location, moduleClasses.className
                                                             FROM moduleClasses
                                                             INNER JOIN moduleInfo
                                                             ON moduleClasses.moduleID=moduleInfo.moduleID
                                                             WHERE moduleInfo.moduleID='" . $moduleID . "'";
      $resultOptionalDetailsModules = mysqli_query($conn, $sqlOptionalDetailsModules);

      if (mysqli_num_rows($resultOptionalDetailsModules) > 0) {
        while($row = $resultOptionalDetailsModules->fetch_assoc()) {

          array_push($mandatoryModulesArray, array($moduleID, $row['semesterNo'], $row['classSemesterNo'], $row['startTime'],
                                                                                          $row['duration'], $row['weekNo'], $row['location'], $row['className']));

        }
      } else {
        echo "0 results from optional details modules";
      }
    }

    // Get all the activities the student does
    $sqlGetActivities = "SELECT activityType, activityName, startTime, duration, colour
                                       FROM studentActivities
                                       WHERE userID='" . $userID . "'";

    $userActivitiesArray = array();

    $resultGetActivities = mysqli_query($conn, $sqlGetActivities);

    if (mysqli_num_rows($resultGetActivities) > 0) {
      while($row = $resultGetActivities->fetch_assoc()) {

          array_push($userActivitiesArray, array($row['activityName'], $row['activityType'],
                                                 $row['startTime'], $row['duration'], $row['colour']));

      }
    } else {
      echo "0 results from find optional modules";
    }



    // For testing, show what we have found
    echo "UserID: " . $userID ;
    echo " Course: " . $courseID ;
    echo " School year: " . $schoolYear ;

    for ($row = 0; $row < count($userOptionalModulesArray); $row++) {
      echo "<p><b>Optional module $row</b></p>";
      echo "<ul>";
      echo "<li>".$userOptionalModulesArray[$row]."</li>";
      echo "</ul>";
    }

    for ($row = 0; $row < count($mandatoryModulesArray); $row++) {
      echo "<p><b>" . $userID . "'s uni shit to do $row</b></p>";
      echo "<ul>";
      for ($col = 0; $col < 8; $col++) {
        switch ($col) {
          case 1:
            echo "<li>Semester no: ".$mandatoryModulesArray[$row][$col]."</li>";
            break;
          case 2:
            echo "<li>Class semester no: ".$mandatoryModulesArray[$row][$col]."</li>";
            break;
          case 3:
            echo "<li>Start time: ".$mandatoryModulesArray[$row][$col]."</li>";
            break;
          case 4:
            echo "<li>Duration: ".$mandatoryModulesArray[$row][$col]."</li>";
            break;
          case 5:
            echo "<li>Week no: ".$mandatoryModulesArray[$row][$col]."</li>";
            break;

          default:
          echo "<li>".$mandatoryModulesArray[$row][$col]."</li>";
          }
      }
      echo "</ul>";
    }


    for ($row = 0; $row < count($userActivitiesArray); $row++) {
      echo "<p><b>" . $userID . "'s activity shit to do $row</b></p>";
      echo "<ul>";
      for ($col = 0; $col < 5; $col++) {
        switch ($col) {
          case 1:
            echo "<li>Activity type: ".$userActivitiesArray[$row][$col]."</li>";
            break;
          case 2:
            echo "<li>Start time: ".$userActivitiesArray[$row][$col]."</li>";
            break;
          case 3:
            echo "<li>Duration: ".$userActivitiesArray[$row][$col]."</li>";
            break;
          default:
          echo "<li>".$userActivitiesArray[$row][$col]."</li>";
          }
      }
      echo "</ul>";
    }


    $conn->close();
  ?>
</body>
