<html>
    <?php
        require_once('/home/pi/NOTEBOAT/config.inc.php');

        session_start();
        
            $userID = $_SESSION['login_user'];
        $conn = new mysqli($database_host, $database_user, $database_pass, $database_name);
    
$weekdayStartHr = $_SESSION['wkdayStartHr'];
$weekdayStartMin = $_SESSION['wkdayStartMin'];
$weekendStartHr = $_SESSION['wkendStartHr'];
$weekendStartMin = $_SESSION['wkendStartMin'];
$weekdayEndHr = $_SESSION['wkdayEndHr'];
$weekdayEndMin = $_SESSION['wkdayEndMin'];
$weekendEndHr = $_SESSION['wkendEndHr'];
$weekendEndMin = $_SESSION['wkendEndMin'];
        
$weekdayStart = $weekdayStartHr * 60 + $weekdayStartMin;
$weekdayEnd = $weekdayEndHr * 60 + $weekdayEndMin;
$weekendStart = $weekendStartHr * 60 + $weekendStartMin;
$weekendEnd = $weekdayStartHr * 60 + $weekendStartMin;

      // Query to input hours
      $queryTimes = "UPDATE `registeredUsers` SET `startTimeWeekDay` = '$weekdayStart', `endTimeWeekDay` = '$weekdayEnd', `startTimeWeekEnd` = '$weekendStart',  `endTimeWeekEnd` = '$weekendEnd' WHERE `userID` =  '$userID'";
echo $queryTimes;
    $addedTimes = $conn -> query($queryTimes);
        // Post semester 1 stats
          if ($_SESSION["semester"] == "sem1"){
        // Semester 1 query
        // Store the posted values
        $conf10111 = $_POST["MATH10111"];
        $conf10131 = $_POST["math10131"];
        $conf16121 = $_POST["comp16121"];
        $conf10120 = $_POST["comp10120"];
        $dueDate10111 = $_POST["math10111deadline"];
        $dueDate10131 = $_POST["math10131deadline"];
        $dueDate16121 = $_POST["comp16121deadline"];
        $dueDate10120 = $_POST["comp10120deadline"];
        
        $selfStudy10111 = $_POST["math10111hr"];
        $selfStudy10131 = $_POST["math10131hr"];
        $selfStudy16121= $_POST["comp16121hr"];
        $selfStudy10120= $_POST["comp10120hr"];
        
        $insertMATH10111EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'MATH10111', '" . $dueDate10111 . "', '" . $conf10111 . "', '" . $selfStudy10111 . "')";
        $insertMATH10131EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'MATH10131', '" . $dueDate10131 . "', '" . $conf10131 . "', '" . $selfStudy10131 . "')";
        $insertCOMP10120EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'COMP10120', '" . $dueDate10120 . "', '" . $conf10120 . "', '" . $selfStudy10120 . "')";
        $insertCOMP16121EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'COMP16121', '" . $dueDate16121 . "', '" . $conf16121 . "', '" . $selfStudy16121 . "')";
        mysqli_query($conn, $insertMATH10111EnrolledQuery);
        mysqli_query($conn, $insertMATH10131EnrolledQuery);
        mysqli_query($conn, $insertCOMP10120EnrolledQuery);
        mysqli_query($conn, $insertCOMP16121EnrolledQuery);
          }
          
        // Semester 2 query
         if ($_SESSION["semester"] == "sem2") {
        $conf10212 = $_POST["math10212"];
        $conf10232 = $_POST["math10232"];
        $conf16212 = $_POST["comp16212"];
        $conf10120 = $_POST["comp10120"];
        $dueDate10212 = $_POST["math10212deadline"];
        $dueDate10232 = $_POST["math10232deadline"];
        $dueDate16212 = $_POST["comp16212deadline"];
        $dueDate10120 = $_POST["comp10120deadline"];
        
        $selfStudy10212 = $_POST["math10212hr"];
        $selfStudy10232 = $_POST["math10232hr"];
        $selfStudy16212 = $_POST["comp16212hr"];
        $selfStudy10120 = $_POST["comp10120hr"];
        
        if ($_POST["semester"] == "COMP11212")
        {
            $conf11212 = $_POST["optional"];
            $dueDate11212 = $_POST["optionaldeadline"];
            $selfStudy11212 = $_POST["optionalhr"];
            $insertCOMP11212EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'COMP11212', '" . $dueDate11212 . "', '" . $conf11212 . "', '" . $selfStudy11212 . "')";
            mysqli_query($conn, $insertCOMP11212EnrolledQuery);
        }
        
        if ($_POST["semester"] == "COMP14112")
        {
            $conf14112 = $_POST["optional"];
            $dueDate14112 = $_POST["optionaldeadline"];
            $selfStudy14112 = $_POST["optionalhr"];
            $insertCOMP14112EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'COMP14112', '" . $dueDate14112 . "', '" . $conf14112 . "', '" . $selfStudy14112 . "')";
            mysqli_query($conn, $insertCOMP14112EnrolledQuery);
        }

        if ($_POST["semester"] == "COMP18112")
        {
            $conf18112 = $_POST["optional"];
            $dueDate18112 = $_POST["optionaldeadline"];
            $selfStudy18112 = $_POST["optionalhr"];
            $insertCOMP18112EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'COMP18112', '" . $dueDate18112 . "', '" . $conf18112 . "', '" . $selfStudy18112 . "')";
            mysqli_query($conn, $insertCOMP18112EnrolledQuery);
        }
        
        $insertMATH10212EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'MATH10212', '" . $dueDate10212 . "', '" . $conf10212 . "', '" . $selfStudy10212 . "')";
        $insertMATH10232EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'MATH10232', '" . $dueDate10232 . "', '" . $conf10232 . "', '" . $selfStudy10232 . "')";
        $insertCOMP16212EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'COMP16212', '" . $dueDate16212 . "', '" . $conf16212 . "', '" . $selfStudy16212 . "')";
        $insertCOMP10120EnrolledQuery = "INSERT INTO `modulesEnrolled` (`userID`, `moduleID`, `hwDueDay`, `confidenceLevel`, `weeklySelfStudy`) VALUES ('" . $userID . "', 'COMP10120', '" . $dueDate10120 . "', '" . $conf10120 . "', '" . $selfStudy10120 . "')";
        mysqli_query($conn, $insertMATH10212EnrolledQuery);
        mysqli_query($conn, $insertMATH10232EnrolledQuery);
        mysqli_query($conn, $insertCOMP16212EnrolledQuery);
        mysqli_query($conn, $insertCOMP10120EnrolledQuery);
         }
header( 'Location: /NOTEBOAT/algorithm1.php');

?>
</html>
