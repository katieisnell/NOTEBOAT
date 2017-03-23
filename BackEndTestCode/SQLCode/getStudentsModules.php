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

  // $sqlFindMandatoryModulesStudyHours =  "SELECT DISTINCT algorithm1Results.moduleID, moduleInfo.isMandatory,
  //                              moduleInfo.semesterNo, moduleClasses.classSemesterNo, algorithm1Results.hoursToStudy
  //                              FROM courseTimetable
  //                              LEFT JOIN moduleInfo ON courseTimetable.moduleID=moduleInfo.moduleID
  //                              LEFT JOIN moduleClasses on courseTimetable.moduleID=moduleClasses.moduleID
  //                              LEFT JOIN algorithm1Results on courseTimetable.moduleID=algorithm1Results.moduleID
  //                              WHERE courseTimetable.courseID='" . $courseID . "' AND courseTimetable.schoolYear='"
  //                                                                            . $schoolYear . "'";
  //
  // $resultFindMandatoryModulesStudyHours = mysqli_query($conn, $sqlFindMandatoryModulesStudyHours);
  //
  // // 2D arrays which store: (moduleID, semesterNo, start time of lec, duration of it, what weekno the lec is on, the location,
  // // and the class name which will be the output to the user of what it is)
  $moduleStudyHoursArray  = array();
  //
  // if (mysqli_num_rows($resultFindMandatoryModulesStudyHours) > 0) {
  //   while($row = $resultFindMandatoryModulesStudyHours->fetch_assoc()) {
  //
  //     if ($row['isMandatory'] == 1) {
  //       array_push($moduleStudyHoursArray, array($row['moduleID'], $row['semesterNo'],
  //                             $row['hoursToStudy']));
  //     }
  //
  //   }
  // } else {
  // echo "0 results from find mandatory modules";
  // }

  // Need to find what optional modules the user take by using INNER JOIN
  $sqlUserOptionalModulesStudyHours = "SELECT DISTINCT algorithm1Results.moduleID, moduleInfo.semesterNo,
                             algorithm1Results.hoursToStudy
                             FROM modulesEnrolled
                             LEFT JOIN algorithm1Results ON modulesEnrolled.moduleID=modulesEnrolled.moduleID
                             LEFT JOIN moduleInfo ON modulesEnrolled.moduleID=moduleInfo.moduleID
                             WHERE modulesEnrolled.userID='" . $userID . "'

                             AND moduleInfo.isMandatory=0";

  $resultUserOptionalModulesStudyHours = mysqli_query($conn, $sqlUserOptionalModulesStudyHours);

  if (mysqli_num_rows($resultUserOptionalModulesStudyHours) > 0) {
    while($row = $resultUserOptionalModulesStudyHours->fetch_assoc()) {

        array_push($moduleStudyHoursArray,  array($row['moduleID'], $row['semesterNo'],
                              $row['hoursToStudy']));

    }
  } else {
    echo "0 results from find optional modules";
  }

  print_r($moduleStudyHoursArray);

?>
</html>
