<!DOCTYPE html>
<head>
  <title>Registration</title>
</head>

<body>
  <h1> Thank You! </h1>
  <!--php script to check if new user is a student and send a confirmation email
  <?php
    $inputUserID = trim(strtolower($_POST["userID"]));
    $inputFirstName = trim(strtolower($_POST["firstName"]));
    $inputLastName = trim(strlower($_POST["lastName"]));
    $inputUsername = trim(strlower($_POST["username"]));
    $emailMessage = "";
    $displayMessage = "";

    require_once('config.inc.php');
    //connect to the database
    $conn = new mysqli($database_host, $database_user, $database_pass,
                       $database_name);
    //check for errors in the connection with sql
    if ($conn -> connect_error)
    {
      die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
    }//if

    $queryStudExists = "SELECT * FROM allStudents WHERE userID = '$inputUserID'";
    $queryStudIsCM = "SELECT * FROM allStudents WHERE userID = '$inputUserID'"
                     . " AND courseID = 'cm'";
    $queryStudNotRegistered = "SELECT * FROM allStudents WHERE userID = "
                              . "'$inputUserID' AND registered = '1'";

    $foundStudent = $conn -> query($queryStudExists);
    //if a student with the id is found
    if (mysqli_num_rows($foundStudent) > 0)
    {
      $foundCMStud = $conn -> query($queryStudIsCM);
      $foundNotRegistered = $conn -> query($queryStudNotRegistered);
      if (mysqli_num_rows($foundCMStud) > 0)
      {
        if (mysqli_num_rows($foundNotRegistered > 0))
        {
          $displayMessage = "Thank you for regsitering! Please check your "
                            . "University email to activate your account!";
          $studentRecord = mysql_fetch_array($foundNotRegistered);
          $emailAddress = $studentRecord['email'];
          $confirmCode = rand();
          $emailMessage = "Thank you for registering to NoteBoat! Please click "
          . "the following link to activate your account!
          http://www.noteboat.com/Registration/emailconfirm.php?usernmae=$inputID&code=$confirmCode";

          $query = "INSERT INTO `Users`(`registerID`, `userName`, `password`,"
                    . "`firstName`, `lastName`, `email`, `confirmCode`, "
                    . "`verified`) VALUES ('$inputUserID','$inputUsername',"
                    . "'$inputPassword','$inputFirstName','$inputLastName',"
                    . "'$emailAddress','$confirmCode','0')";
          mail($emailAddress, "Noteboat confirmation", $emailMessage,
                "FROM: donotreply@noteboat.com");
        }//if (not registered yet)
      }//if (found CM)
      else
      {
        $displayMessage = "Registration failed! Registration is only open to "
                          . "CM students at the moment.";
      }//else
    }//if  student exists)
    else
    {
      $displayMessage = "NoteBoat is only available to University of Manchester"
                        . " students!";
    }
        $conn -> close();
        echo $displayMessage;
  ?>
</body>
</html>
