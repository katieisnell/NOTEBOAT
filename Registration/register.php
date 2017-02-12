<!DOCTYPE html>
<head>
  <title>Registration</title>
</head>

<body>
  <h1> Thank You! </h1>
  <!--php script to check if new user is a student and send a confirmation email
  <?php
    $inputUserID = trim(strtolower($_POST["userID"]));

    require_once('config.inc.php');
    //connect to the database
    $conn = new mysqli($database_host, $database_user, $database_pass,
                       $database_name);
    //check for errors in the connection with sql
    if ($conn -> connect_error)
    {
      die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
    }//if
    $query = "SELECT * FROM allStudents WHERE userID = '" . $inputUserID . "'"
              . " AND registered = '0'";
    $foundStudent = $conn -> query($query);

    //if a student with the id is found
    if (mysqli_num_rows($foundStudent) > 0)
    {

    }



  ?>
