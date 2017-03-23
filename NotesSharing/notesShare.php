<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Note Sharing</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/skeleton.css">
  <link rel="stylesheet" href="../css/website.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/boat.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


  <!-- <div class="row">
    <div class="six columns offset-by-three ">
      <button class="u-full-width button-primary" type="button">Upload Notes</button>
    </div>
  </div> -->


<div class="container">

  <section class="header">
  <div class="container">
  <div class="row">

    <div id ="logo" class="three columns">
      <a href="/NOTEBOAT/dashboard.html">
        <img class="u-full-width" src="images/logo2.png">
      </a>
    </div>

<div class="eight columns" style="text-align:center">
<h1>Note Sharing</h1>
</div>

    <div class="one column">
      <div class="dropdown">
         <button class="dropbtn">-----</button>
         <div class="dropdown-content">
         <a href="/NOTEBOAT/dashboard.html">TimeTable</a>
         <a href="#">Note Sharing</a>
     	<a href="/NOTEBOAT/NotesSharing/following.php">Following</a>
         <a href="/NOTEBOAT/settings.html">Settings</a>
         <a href="/NOTEBOAT/logout.php">Logout</a>
         </div>
      </div>
    </div>

  </div>
  </div>
  </section>



  <section class="main">
    <div class="container">


    <div class="module-selector">

    <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="row">

      <div class="five columns offset-by-one">
      <select class="u-full-width"name="modules" id="modules">
        <option value="">Pick a module</option>
        <option value="COMP10120">COMP10120</option>
        <option value="COMP16121">COMP16121</option>
        <option value="COMP16212">COMP16212</option>
        <option value="MATH10111">MATH10111</option>
        <option value="MATH10131">MATH10131</option>
        <option value="MATH10212">MATH10212</option>
        <option value="MATH10232">MATH10232</option>
        <option value="COMP14112">COMP14112</option>
        <option value="COMP11212">COMP11212</option>
        <option value="COMP18112">COMP18112</option>
      </select>
    </div>

<div class="five columns">
    <input type="file" name="file" id="button">
</div>
</div>

<div class="row">
<div class="two columns offset-by-one">
   <label> <input type= "checkbox" name="public" value="yes" >Public?</label>
</div>
<div class="six columns">
    <input class="button u-full-width" type="submit" value="Upload" id="button">
</div>
    </form>
   </div>

    <form action="" method="post">

    <div class="row">
      <div class="five columns offset-by-one">
      <label>Choose a module</label>
      <select class="u-full-width" name="modules" id="modules">
        <option value="">Pick a module</option>
        <option value="COMP10120">COMP10120 - First Year Project</option>
        <option value="COMP16121">COMP16121 - Java Semester 1</option>
        <option value="COMP16212">COMP16212 - Java Semester 2</option>
        <option value="COMP14112">COMP14112 - AI</option>
        <option value="COMP11212">COMP11212 - Computation</option>
        <option value="COMP18112">COMP18112 - Distributed Systems</option>
        <option value="MATH10111">MATH10111 - Foundation in Pure Mathematics</option>
        <option value="MATH10131">MATH10131 - Calc and Vectors</option>
        <option value="MATH10212">MATH10212 - Linear Algebra</option>
        <option value="MATH10232">MATH10232 - Calc and Applictions</option>
      </select>
      </div>

      <div class="four columns offset-by-one">
        <label>Search for keywords</label>
        <input class="u-full-width" type="text" placeholder="Search " name="search">
      </div>
    </div>

      <div class="row">
        <div class="six columns offset-by-three ">
          <button class="u-full-width" type="submit">Browse Notes</button>
        </div>
      </div>



  </form>
  </div>
  </section>

  <section class="notes">
    <div class="container">

        <div class="row">
        <style>
          table, td
          {
            border: 1px solid black;
          }
        </style>
          <table id="filesTable">
          </table>

        </div>

    </div>
  </section>

  <section class="footer">
  <div class="container">
  <div class="row">
    <div id="navigation" class="twelve columns">
      <nav>
      <ul>
        <li><a href="http://10.2.238.64/NOTEBOAT/about.html">About</a></li>
        <li><a href="http://10.2.238.64/NOTEBOAT/contact.html">Contact Us</a></li>
        <li><a href="http://10.2.238.64/NOTEBOAT/termsAndConditions.html">Terms &amp; Conditions</a></li>
      </ul>
    </nav>
    </div>
  </div>
  </div>
  </section>

</div>

<script>
  function createRow(name, module, fileOwner, ownerName)
  {
      var nameArray = name.split("<");
      var fileName = nameArray[0];
      var table = document.getElementById("filesTable")
      var row = table.insertRow(0);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      cell1.innerHTML = "<a href=\"/NOTEBOAT/NotesSharing/uploads/" + fileOwner + "/" + fileName + "\"> " + fileName + "</a>";
      cell2.innerHTML = module;
      cell3.innerHTML = ownerName;
  }

  function addTableHeader()
  {
    var table = document.getElementById("filesTable")
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML = "File Name";
    cell2.innerHTML = "Module";
    cell3.innerHTML = "Owner";
  }


</script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$loggedInUser = $_SESSION['login_user'];
$chosenModule = $_POST['modules'];
$searchTerms =  $_POST['search'];

$numberRows = 0;    

require("/home/pi/NOTEBOAT/config.inc.php");
$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

if($conn -> connect_error)
{
	die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
}


$query = "SELECT * FROM Notes WHERE fileModuleCode = '$chosenModule'";

$foundFiles = $conn -> query($query);
$numOfFiles = mysqli_num_rows($foundFiles);

if ($foundFiles -> num_rows > 0)
{
  while($row = $foundFiles->fetch_assoc())
	{
    $fileOwner = $row["userID"];
    $name = $row["fileName"];
    $module = $row["fileModuleCode"];
    $isPublic = $row["filePublic"];
    $nameArray = explode('<', $name);

    $nameQuery = "SELECT * FROM registeredUsers WHERE userID = '$fileOwner'";
    $foundUser = $conn -> query($nameQuery);
    $r = $foundUser->fetch_assoc();

    $ownerName = $r["prefFirstName"] . " " . $r["prefLastName"];
    $ownerFollowingString = $r["followingUsers"];

    $thisUserQuery = "SELECT followingUsers FROM registeredUsers where userID = '$loggedInUser'";
    $foundThisUser = $conn -> query($thisUserQuery);
    $thisUser = $foundThisUser->fetch_assoc();
    $currentUserFollowingString = $thisUser["followingUsers"];

    $userArray = explode('-', $currentUserFollowingString);
    $viewUserArray = explode('-', $ownerFollowingString);

    $followingEachOther = FALSE;
    $secondFollowFirst = FALSE;
    $firstFollowSecond = FALSE;
    for($index = 0; $index < count($userArray); $index++)
    {
        if($userArray[$index] == $fileOwner)
          $firstFollowSecond = TRUE;
    }
   for($index = 0; $index < count($viewUserArray); $index++)
   {
        if($viewUserArray[$index] == $loggedInUser)
            $secondFollowFirst = TRUE;
   }
   if($secondFollowFirst && $firstFollowSecond)
     $followingEachOther = TRUE;

if($searchTerms !== "")
{
  $searchTermsArray = explode(' ', $searchTerms);
  $searchMatch = TRUE;
  for($index = 0; $index < count($searchTermsArray); $index++)
  {
    if($searchMatch)
    {
       if(($searchTermsArray[$index] == $fileOwner) || ($searchTermsArray[$index] == $nameArray[0]) || ($searchTermsArray[$index] == $r["prefFirstName"] ) || ( $searchTermsArray[$index] == $r["prefLastName"])) 
         $searchMatch = TRUE;
       else if($searchMatch)
          $searchMatch = FALSE;
    }
  }   
}
else
  $searchMatch = TRUE;
if($searchMatch)
{
    if(($isPublic == 1) || $followingEachOther || ($fileOwner == $loggedInUser))
    {
		echo '<script type="text/javascript"> createRow(\'' . $name . '\' , \'' . $module . '\' , \'' . $fileOwner . '\' , \'' . $ownerName . '\'); </script>';
        $numberRows = $numberRows + 1;
   }
}   
  }
   if($numberRows > 0)
   {
        echo '<script type="text/javascript"> addTableHeader(); </script>'; 
   }
}
if($numberRows < 1)
{
  echo "No notes match your search!\n";
}

}
?>

