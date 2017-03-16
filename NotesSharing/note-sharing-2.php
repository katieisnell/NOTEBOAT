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
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/website.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/boat.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div class="container">

  <section class="navigation">
  <div class="container">
  <div class="row">
    <div id ="logo" class="three columns">
      <a href="index.html">
        <img class="u-full-width" src="images/logo2.png">
      </a>
    </div>


    <div id="navigation" class="nine columns">
      <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#introduction">Introduction</a></li>
        <li><a href="#login">Login</a></li>
        <li><a href="#register">Register</a></li>
      </ul>
    </nav>
    </div>
  </div>
  </div>
  </section>

  <section class="login">
    <div class="container">
    <form id="viewNotes" action="" method="post">

    <div class="row">
      <div class="six columns">
      <label>Choose a module</label>
      <select name="modules" id="modules">
        <option value="">Pick a module</option>
        <option value="COMP10120">COMP10120 - First Year Project</option>
        <option value="COMP16112">COMP16121 - Java Semester 1</option>
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

      <div class="six columns">
        <label>Search for keywords</label>
        <input class="u-full-width" type="text" placeholder="Search " name="username">
      </div>
    </div>
    
    <div class="row">  
      <div class="six columns offset-by-three ">
        <button class="u-full-width" type="submit" style="margin-top:27px;">Browse Notes</button>
      </div>
    </div>
    </form>
<!-- JESSICA NEEDS TO SORT THIS DIV STUFF OUT AND MAKE IT LOOK NICE -->
<div>
  <style>
    table, td 
    {
      border: 1px solid black;
    }
  </style>
  <table id="filesTable">
	</table>

	<br>
</div>


      <div class="row">  
        <div class="six columns offset-by-three ">
          <button class="u-full-width" type="button" style="margin-top:10px;">Upload Notes</button>
        </div>
      </div>

  
  </div>
  </section>

  <section class="footer">
  <div class="container">
  <div class="row">
    <div class="one column">One1</div>
    <div class="one column">One2</div>
    <div class="one column">One3</div>
    <div class="one column">One4</div>
    <div class="one column">One5</div>
    <div class="one column">One6</div>
    <div class="one column">One7</div>
    <div class="one column">One8</div>
    <div class="one column">One9</div>
    <div class="one column">One10</div>
    <div class="one column">One11</div>
    <div class="one column">One12</div>
  </div>
  </div>
  </section>

</div>

<script>
  function createRow(name, module, fileOwner)
  {
      var nameArray = name.split("<");
      var fileName = nameArray[0];
      var table = document.getElementById("filesTable")
      var row = table.insertRow(0);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      cell1.innerHTML = "<a href=\"/NOTEBOAT/NotesSharing/uploads/" + fileOwner + "/" + fileName + "\"> " + fileName + "</a>";
      cell2.innerHTML = module;
  }

  function deleteRow()
  {
      document.getElementById("myTable").deleteRow(0);
  }
</script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$chosenModule = $_POST['modules'];

require("/home/pi/NOTEBOAT/config.inc.php");
$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

if($conn -> connect_error)
{
	die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
}


$query = "SELECT * FROM Notes WHERE fileModuleCode = '$chosenModule'";

$foundFiles = $conn -> query($query);
$numOfFiles = mysqli_num_rows($foundFiles);

	while($row = $foundFiles->fetch_assoc())
	{
		echo $row["fileName"];
    $fileOwner = $row["userID"];
    $name = $row["fileName"];
    $module = $row["fileModuleCode"];
		echo '<script type="text/javascript"> createRow(\'' . $name . '\' , \'' . $module . '\' , \'' . $fileOwner . '\'); </script>';
  }
}
?>

