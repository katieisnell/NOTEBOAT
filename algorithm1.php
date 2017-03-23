<html>
    <?php
		session_start();
        require_once('/home/pi/NOTEBOAT/config.inc.php');
       
        $conn = new mysqli($database_host, $database_user, $database_pass, $database_name);
 
        // Check connection
        if ($conn->connect_error)
        {
          die("Connection failed: " . $conn->connect_error);
        }
 
        require 'module.php';
  
       
               
        // Initial variable delcarations
        $CL10111;
        $CL10131;
        $CL16121;
        $CL16212;
        $CL10212;
        $CL10120;
        $CL10232;
        $CL11212;
        $CL14112;
        $CL18112;
 
        // Number of hours a student is willing to work a week per module
        $willingToWorkMATH10111;
        $willingToWorkMATH10212;
        $willingToWorkMATH10131;
        $willingToWorkMATH10232;
        $willingToWorkCOMP10120;
        $willingToWorkCOMP16121;
        $willingToWorkCOMP16212;
        $willingToWorkCOMP14112;
        $willingToWorkCOMP18112;
        $willingToWorkCOMP11212;
       
        // Class variables for the resulting hours per week for a module
            $MATH10212_Result;
            $MATH10232_Result;
            $COMP16212_Result;
            $COMP10120_Result;
            $COMP11212_Result;
            $COMP18112_Result;
            $COMP14112_Result;
            $MATH10111_Result;
            $MATH10131_Result;
            $COMP16121_Result;
           
        $inputUsername = $_SESSION['login_user'];
 
        // Make the query statement
        $queryModules = "SELECT * FROM modulesEnrolled WHERE `userID` = '$inputUsername'";
       
        // Fetch the mysqli query object
        $moduleResult = mysqli_query($conn, $queryModules);
       
       
        // Set module details
      while ($row = mysqli_fetch_assoc($moduleResult))
      {
        // Set the confidence lvl
        $confidenceLevel = $row["confidenceLevel"];
       
        // Set the hours willing to work
        $willingToWork = $row["weeklySelfStudy"];
       
        $moduleID = $row["moduleID"];
       
        if ($moduleID == "MATH10212") {
            $CL10212 = $confidenceLevel;
            $willingToWorkMATH10212 = $willingToWork;
        }
        if ($moduleID == "MATH10111") {
            $CL10111 = $confidenceLevel;
            $willingToWorkMATH10111 = $willingToWork;
        }
        if ($moduleID == "MATH10131") {
            $CL10131 = $confidenceLevel;
            $willingToWorkMATH10131 = $willingToWork;
        }
        if ($moduleID == "MATH10232") {
            $CL10232 = $confidenceLevel;
            $willingToWorkMATH10232 = $willingToWork;
        }
        if ($moduleID == "COMP16212") {
                $CL16212 = $confidenceLevel;
                $willingToWorkCOMP16212 = $willingToWork;
        }
        if ($moduleID == "COMP10120") {
                $CL10120 = $confidenceLevel;
                $willingToWorkCOMP10120 = $willingToWork;
        }
        if ($moduleID == "COMP16121") {
                $CL16121 = $confidenceLevel;
                $willingToWorkCOMP16121 = $willingToWork;
        }
        if ($moduleID == "COMP11212") {
                $CL11212 = $confidenceLevel;
                $willingToWorkCOMP11212 = $willingToWork;
        }
        if ($moduleID == "COMP14112") {
            $CL14112 = $confidenceLevel;
            $willingToWorkCOMP14112 = $willingToWork;
        }
        if ($moduleID == "COMP18112") {
            $CL18112 = $confidenceLevel;
            $willingToWorkCOMP18112 = $willingToWork;
        }
       
      } // end of while
     
        // If the month is 6 >, it's semester 1, if it's <7 it's semester two.
        $whatSemesterIsIt = date("m");
       
        // Scale hours for each module. Already in DB.
        $recommendedMATH10111 = 8;
        $recommendedMATH10131 = 6;
        $recommendedMATH10212= 5;
        $recommendedMATH10232 = 8;
        $recommendedCOMP16212 = 8;
        $recommendedCOMP16121 = 10;
        $recommendedCOMP10120 = 4;
        $recommended18112 = 4;
        $recommended11212 = 4;
        $recommended14112 = 4;
       
 
        // Set what semester it is - construct appropriatemodules
        if ($whatSemesterIsIt > 6)
        {
            // Construct the modules in this semester 2
            $MATH10111 = new Module("MATH10111", 1, $recommendedMATH10111, $willingToWorkMATH10111);
            $MATH10131 = new Module("MATH10131", 1, $recommendedMATH10131, $willingToWorkMATH10131);
            $COMP16121 = new Module("COMP16121", 1, $recommendedCOMP16121, $willingToWorkCOMP16121);
            $COMP10120 = new Module("COMP10120", 1, $recommendedCOMP10120, $willingToWorkCOMP10120);
           
            // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
            switch($MATH10111->confidenceLevel)
            {
                    case "1":
                        $MATH10111_Result = round($MATH10111->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $MATH10111_Result = round($MATH10111->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $MATH10111_Result = round($MATH10111->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $MATH10111_Result = round($MATH10111->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $MATH10111_Result = round($MATH10111->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
            } // switch
           
             // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
            switch($MATH10131->confidenceLevel)
            {
                    case "1":
                        $MATH10131_Result = round($MATH10131->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $MATH10131_Result = round($MATH10131->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $MATH10131_Result = round($MATH10131->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $MATH10131_Result = round($MATH10131->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $MATH10131_Result = round($MATH10131->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
            } // switch
           
             // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
            switch($COMP16121->confidenceLevel)
            {
                    case "1":
                        $COMP16121_Result = round($COMP16121->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $COMP16121_Result = round($COMP16121->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $COMP16121_Result = round($COMP16121->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $COMP16121_Result = round($COMP16121->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $COMP16121_Result = round($COMP16121->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
            } // switch
 
             // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
            switch($COMP10120->confidenceLevel)
            {
                    case "1":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
            } // switch
 
           
            // Must reduce the number of hours if they are not willing to work that many per module
            if ($COMP10120_Result < $willingToWorkCOMP10120){
                $COMP10120_Result = $willingToWorkCOMP10120;
            }
            if ($COMP16121_Result < $willingToWorkCOMP16121){
                $COMP16121_Result = $willingToWorkCOMP16121;
            }
            if ($MATH10111_Result < $willingToWorkMATH10111){
                $MATH10111_Result = $willingToWorkMATH10111;
            }
            if ($MATH10131_Result < $willingToWorkMATH10131){
                $MATH10131_Result = $willingToWorkMATH10131;
            }
            // Finally we should now have the correct $RESULTS
            // Create the insert query to insert into the results table
            $insertQuery10120 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'COMP10120', " . $COMP10120_Result . ")";
            mysqli_query($conn, $insertQuery10120);
           
              // Create the insert query to insert into the results table
            $insertQuery16121 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'COMP16121', " . $COMP16121_Result . ")";
            mysqli_query($conn, $insertQuery16121);
           
            // Create the insert query to insert into the results table
            $insertQuery10111 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'MATH10111', " . $MATH10111_Result . ")";
            mysqli_query($conn, $insertQuery10111);
           
            // Create the insert query to insert into the results table
            $insertQuery10131 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'MATH10131', " . $MATH10131_Result . ")";
            mysqli_query($conn, $insertQuery10131);
        } // if
 
 
       
        if ($whatSemesterIsIt < 7)
        {
            // Construct the modules in this semester 2
            if (isset($CL10212))
            {
                $MATH10212 = new Module("MATH10212", $CL10212, $recommendedMATH10212, $willingToWorkMATH10212);
               
                 // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
                 switch($MATH10212->confidenceLevel)
                 {
                    case "1":
                        $MATH10212_Result = round($MATH10212->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $MATH10212_Result = round($MATH10212->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $MATH10212_Result = round($MATH10212->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $MATH10212_Result = round($MATH10212->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $MATH10212_Result = round($MATH10212->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
                } // switch
            }
           
            if (isset($CL10232))
            {
                $MATH10232 = new Module("MATH10232", $CL10232, $recommendedMATH10232, $willingToWorkMATH10232);
           
             // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
              switch($MATH10232->confidenceLevel)
              {
                    case "1":
                        $MATH10232_Result = round($MATH10232->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $MATH10232_Result = round($MATH10232->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $MATH10232_Result = round($MATH10232->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $MATH10232_Result = round($MATH10232->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $MATH10232_Result = round($MATH10232->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
             } // switch
            } // isset
            if (isset($CL16212))
            {
                $COMP16212 = new Module("COMP16212", $CL16212, $recommendedCOMP16212, $willingToWorkCOMP16212);
                            // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
                switch($COMP16212->confidenceLevel)
                {
                    case "1":
                        $COMP16212_Result = round($COMP16212->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $COMP16212_Result = round($COMP16212->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $COMP16212_Result = round($COMP16212->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $COMP16212_Result = round($COMP16212->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $COMP16212_Result = round($COMP16212->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
                }
            }
            if (isset($CL10120))
            {
                $COMP10120 = new Module("COMP10120", $CL10120, $recommendedCOMP10120, $willingToWorkCOMP10120);
                             // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
                switch($COMP10120->confidenceLevel)
                {
                    case "1":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $COMP10120_Result = round($COMP10120->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
                } // switch
                $RoundedCOMP10120 = $COMP10120_Result;
            }
            if (isset($CL11212))
            {
                $COMP11212 = new Module("COMP11212", $CL11212, $recommended11212, $willingToWorkCOMP11212);
           
                 // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
                switch($COMP11212->confidenceLevel)
                {
                    case "1":
                        $COMP11212_Result = round($COMP11212->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $COMP11212_Result = round($COMP11212->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $COMP11212_Result = round($COMP11212->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $COMP11212_Result = round($COMP11212->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $COMP11212_Result = round($COMP11212->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
                } // switch
            }
            if (isset($CL14112))
            {
                $COMP14112 = new Module("COMP141112", $CL14112, $recommended14112, $willingToWorkCOMP14112);
           
                 // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
                switch($COMP14112->confidenceLevel)
                {
                    case "1":
                        $COMP14112_Result = round($COMP14112->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $COMP14112_Result = round($COMP14112->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $COMP14112_Result = round($COMP14112->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $COMP14112_Result = round($COMP14112->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $COMP14112_Result = round($COMP14112->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
                } // switch
            }
            if (isset($CL18112))
            {
                $COMP18112 = new Module("COMP18112", $CL18112, $recommended18112, $willingToWorkCOMP18112);
           
                 // 1 means unconfident, 10 is super confident this will return the adjusted confidence level
                switch($COMP18112->confidenceLevel)
                {
                    case "1":
                        $COMP18112_Result = round($COMP18112->recommendedStudyHours * 1);
                        break;
                    case "2":
                        $COMP18112_Result = round($COMP18112->recommendedStudyHours * .9);
                        break;
                    case "3":
                        $COMP18112_Result = round($COMP18112->recommendedStudyHours * .8);
                        break;
                    case "4":
                        $COMP18112_Result = round($COMP18112->recommendedStudyHours * .7);
                        break;
                    case "5":
                        $COMP18112_Result = round($COMP18112->recommendedStudyHours * .6);
                        break;
                    default:
                        echo "Something fucked up";
                        break;
                } // switch
            }
            // Must reduce the number of hours if they are not willing to work that many per module
            if ($COMP10120_Result > $willingToWorkCOMP10120){
                $COMP10120_Result = $willingToWorkCOMP10120;
            }
            if ($COMP16212_Result > $willingToWorkCOMP16212){
                $COMP16212_Result = $willingToWorkCOMP16212;
            }
            if ($MATH10212_Result > $willingToWorkMATH10212){
                $MATH10212_Result = $willingToWorkMATH10212;
            }
            if ($MATH10232_Result > $willingToWorkMATH10232){
                $MATH10232_Result = $willingToWorkMATH10232;
            }
            if (isset($willingToWorkCOMP11212))
            {
            if ($COMP11212_Result > $willingToWorkCOMP11212){
                $COMP11212_Result = $willingToWorkCOMP11212;
            }
            }
            if (isset($willingToWorkCOMP14112))
            {
            if ($COMP14112_Result > $willingToWorkCOMP14112){
                $COMP14112_Result = $willingToWorkCOMP14112;
            }
            }
            if (isset($willingToWorkCOMP18112))
            {
            if ($COMP18112_Result > $willingToWorkCOMP18112){
                $COMP18112_Result = $willingToWorkCOMP18112;
            }
            }
   
            // Create the insert query to insert into the results table
            $insertQuery10120 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'COMP10120', " . $COMP10120_Result . ")";
            mysqli_query($conn, $insertQuery10120);
           
              // Create the insert query to insert into the results table
            $insertQuery16212 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'COMP16212', " . $COMP16212_Result . ")";
            mysqli_query($conn, $insertQuery16212);
           
            // Create the insert query to insert into the results table
            $insertQuery10232 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'MATH10232', " . $MATH10232_Result . ")";
            mysqli_query($conn, $insertQuery10232);
           
            // Create the insert query to insert into the results table
            $insertQuery10212 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'MATH10212', " . $MATH10212_Result . ")";
            mysqli_query($conn, $insertQuery10212);
           
            if (isset($willingToWorkCOMP14112))
            {
            $insertQuery14112 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'COMP14112', " . $COMP14112_Result . ")";
            mysqli_query($conn, $insertQuery14112);
            }
           
            if (isset($willingToWorkCOMP18112))
            {
            $insertQuery18112 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'COMP18112', " . $COMP18112_Result . ")";
            mysqli_query($conn, $insertQuery18112);
            }
           
            if (isset($willingToWorkCOMP11212))
            {
            $insertQuery11212 = "INSERT INTO `algorithm1Results` (`userID`, `moduleID`, `hoursToStudy`) VALUES ('" . $inputUsername . "', 'COMP11212', " . $COMP11212_Result . ")";
            mysqli_query($conn, $insertQuery11212);
            }
            // Finally we should now have the correct $RESULTS
        } // if */
   
         $conn->close();   
     echo '<script type="text/javascript"> alert("Your account is now set up! Welcome aboard the NoteBoat!"); window.location.href="dashboard.html"; </script>';
    ?>
</html>
