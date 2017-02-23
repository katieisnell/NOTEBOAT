<!DOCTYPE html>
<head>
  <title> HOME PAGE </title>
</head>

<body>
<?php
  $inputUserName = trim($_POST["username"]);
  $inputPassword = $_POST["password"];
  $loginGranted = false;

  require_once("config.inc.php");

  $conn = new mysqli($database_host, $database_user, $database_pass,
                    $database_name);
  if ($conn -> connect_error)
  {
    die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error)
  }

  






?>
