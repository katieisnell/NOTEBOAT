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
<style>
table, td {
    border: 1px solid black;
}
</style>
<div>
	<table id="filesTable">
		 <tr>
  			  <td>Row1 cell1</td>
    		  <td>Row1 cell2</td>
  		</tr>
	</table>
	
	<br>
</div>

<script>
function createRow(name, module) 
{
    var table = document.getElementById("filesTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = name;
    cell2.innerHTML = module;
}

function deleteRow() 
{
    document.getElementById("myTable").deleteRow(0);
}
</script>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{

$chosenModule = $_POST['module'];

require("/home/pi/NOTEBOAT/config.inc.php");
$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

if($conn -> connect_error)
{
	die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
}


$query = "SELECT * FROM Notes WHERE fileModuleCode = '$chosenModule'";

$foundFiles = $conn -> query($query);
$numOfFiles = mysqli_num_rows($foundFiles);


//for ($i = 1; $row <= $numOfFiles; $i++)
//{
	while($row = $foundFiles->fetch_assoc())
	{
		echo $row["fileName"];
		$test =  '<script type="text/javascript"> createRow($row["fileName"] , $row["fileModuleCode"]); </script>';
    }
//}

}
?>

