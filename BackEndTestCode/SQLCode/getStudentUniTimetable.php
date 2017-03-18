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

    // Now we have their course, we can find out their mandatory modules,
    // which we will store in an array
    $sqlFindModules = "SELECT moduleID FROM courseTimetable WHERE courseID='"
                                          . $courseID . "' AND schoolYear='" . $schoolYear . "'";

    // Will store the no of mandatory modules in array
    $modulesArray = array();

//    $resultFindModules = $conn->query($sqlFindModules);
    $resultFindModules = mysqli_query($conn, $sqlFindModules);

    if (mysqli_num_rows($resultFindModules) > 0) {
      while($row = $resultFindModules->fetch_assoc()) {
        // Use array_push to add to the end of the array
        array_push($modulesArray, $row['moduleID']);
      }
    } else {
    echo "0 results from find modules";
    }




    // Now we have the modules they can do, we have to find out more specific details about each module
    // Basically have to figure out what is mandatory, what semster the modules happen in
    $sqlFindMandatoryModules = "SELECT courseTimetable.moduleID, moduleInfo.isMandatory, moduleInfo.semesterNo
                                                           FROM courseTimetable
                                                           INNER JOIN moduleInfo
                                                           ON courseTimetable.moduleID=moduleInfo.moduleID
                                                           WHERE courseID='" . $courseID . "' AND schoolYear='" . $schoolYear . "'";

    $resultFindMandatoryModules = mysqli_query($conn, $sqlFindMandatoryModules);

    // 2D arrays which store: (moduleID, semesterNo
    $mandatoryModulesArray  = array();
    $optionalModulesArray  = array();

//    $rowNo = 0;

    if (mysqli_num_rows($resultFindMandatoryModules) > 0) {
      while($row = $resultFindMandatoryModules->fetch_assoc()) {

        if ($row['isMandatory'] == 1) {
          array_push($mandatoryModulesArray, array($row['moduleID'], $row['semesterNo']));
        } else {
          array_push($optionalModulesArray, array($row['moduleID'], $row['semesterNo']));
        }

      }
    } else {
    echo "0 results from find modules";
    }



    // Now we have the modules they can do, we have to find out more specific details about each module
    // Basically have to figure out what is mandatory, what semster the modules happen in
    $sqlFindMandatoryModules2 = "SELECT courseTimetable.moduleID, moduleInfo.isMandatory, moduleInfo.semesterNo, moduleClasses.startTime, moduleClasses.duration, moduleClasses.weekNo, moduleClasses.location, moduleClasses.className
                                                           FROM courseTimetable
LEFT JOIN moduleInfo ON courseTimetable.moduleID=moduleInfo.moduleID
                              LEFT JOIN moduleClasses on courseTimetable.moduleID=moduleClasses.moduleID

                                                           WHERE courseTimetable.courseID='" . $courseID . "' AND courseTimetable.schoolYear='" . $schoolYear . "'";
//echo $sqlFindMandatoryModules2;

    $resultFindMandatoryModules2 = mysqli_query($conn, $sqlFindMandatoryModules2);

    // 2D arrays which store: (moduleID, semesterNo, start time of lec, duration of it, what weekno the lec is on, the location,
    // and the class name which will be the output to the user of what it is
    $mandatoryModulesArray2  = array();
    $optionalModulesArray2  = array();

//    $rowNo = 0;

    if (mysqli_num_rows($resultFindMandatoryModules2) > 0) {
      while($row = $resultFindMandatoryModules2->fetch_assoc()) {

        if ($row['isMandatory'] == 1) {
          array_push($mandatoryModulesArray2, array($row['moduleID'], $row['semesterNo'], $row['startTime'],
                                                                                              $row['duration'], $row['weekNo'], $row['location'], $row['className']));
        } else {
          array_push($optionalModulesArray2, array($row['moduleID'], $row['semesterNo'], $row['startTime'],
                                                                                              $row['duration'], $row['weekNo'], $row['location'], $row['className']));
        }

      }
    } else {
    echo "0 results from find modules 2";
    }










    // For testing, show what we have found
    echo "UserID: " . $userID ;
    echo " Course: " . $courseID ;
    echo " School year: " . $schoolYear ;
    echo "<br>" ;
    $arrayLength = count($modulesArray);
    for ($index = 0; $index < $arrayLength; $index++) {
      echo $modulesArray[$index] . "<br>";
    }

for ($row = 0; $row < count($mandatoryModulesArray); $row++) {
  echo "<p><b>Mandatory module $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 2; $col++) {
    echo "<li>".$mandatoryModulesArray[$row][$col]."</li>";
  }
  echo "</ul>";
}

for ($row = 0; $row < count($optionalModulesArray); $row++) {
  echo "<p><b>Optional module $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 2; $col++) {
    echo "<li>".$optionalModulesArray[$row][$col]."</li>";
  }
  echo "</ul>";
}


for ($row = 0; $row < count($mandatoryModulesArray2); $row++) {
  echo "<p><b>!!!!!!!!!!!!Mandatory module $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 7; $col++) {
    echo "<li>".$mandatoryModulesArray2[$row][$col]."</li>";
  }
  echo "</ul>";
}

for ($row = 0; $row < count($optionalModulesArray2); $row++) {
  echo "<p><b>!!!!!!!!!!!!Optional module $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 7; $col++) {
    echo "<li>".$optionalModulesArray2[$row][$col]."</li>";
  }
  echo "</ul>";
}

    $conn->close();
  ?>
</body>
