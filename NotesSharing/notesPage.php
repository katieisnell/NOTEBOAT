<?php

$chosenModule = $_POST['modules'];

require("config.inc.php");
echo Sup!;
$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

if($conn -> connect_error)
{
	die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
}


$query = "SELECT * FROM Notes WHERE fileModuleCode = '$chosenModule'";

$foundFiles = $conn -> query($query);
$numOfFiles = mysqli_num_rows($foundFiles);

<table id="myTable">
  <tr>
    <td>Row1 cell1</td>
    <td>Row1 cell2</td>
  </tr>
  <tr>
    <td>Row2 cell1</td>
    <td>Row2 cell2</td>
  </tr>
  <tr>
    <td>Row3 cell1</td>
    <td>Row3 cell2</td>
  </tr>
</table>
<br>

<button onclick="myCreateFunction()">Create row</button>
<button onclick="myDeleteFunction()">Delete row</button>

<script>
function myCreateFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = "NEW CELL1";
    cell2.innerHTML = "NEW CELL2";
}

function myDeleteFunction() {
    document.getElementById("myTable").deleteRow(0);
}
</script>
for ($row = 1; $row <= numOfFiles; $row++)
{

}
echo $numOfFiles;

?>
<html>
<head>
  <title>Notes View</title>
</head>

<body>
<h1>View notes</h1>
<div>
<form id="viewNotes" action="" method="post"></br>
  <select name="module" id="module">
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

    <button type="submit" value="Refine" id="button"></button>
</form>
</div>

</body>
</html>
