<?php
$file_result = "";
$loggedInUser = "mbaxask3";
$fileModule = "MATH10111";
$isFilePublic = 1;
if ($_FILES["file"]["error"] > 0)
{
  $file_result .= "No file uploaded or invalid file";
  $file_result .= "Error Code: " .$_FILES["file"]["error"] . "<br>";
}
else
{
  if (file_exists("uploads/$loggedInUser/" . $_FILES["file"]["name"]))
  {
    $file_result .= "A file with the same name exists. Please choose a new name";
  }
  else
   {
     if ($_FILES["file"]["type"] === 'application/pdf')
     {
       move_uploaded_file($_FILES["file"]["tmp_name"],
       "uploads/$loggedInUser/" . $_FILES["file"]["name"]);
       
       $file_result .= "File uploaded successfully";


 $newFileID = rand();
  require_once('config.inc.php');
  $conn = new mysqli($database_host, $database_user, $database_pass,
                        $database_name);

  if($conn -> connect_error)
  {
    die('Connect Error ('.$conn -> connect_errno.')'.$conn -> connect_error);
  }

  $fileName = $_FILES["file"]["name"] . "<" . $fileID;
  $query = "INSERT INTO Notes (`fileID`, `userID`, `fileName`, "
           . "`fileModuleCode`, `uploadDate`, `filePublic`) VALUES "
           . " ('$newFileID','$loggedInUser','$fileName','$fileModule', "
           . "'" . date("d-m-Y h:i:sa") . "' , '$isFilePublic')";

  $conn -> query($query);
  echo "Added to the DB YO!";

     }
     else
     {
       $file_result .= "Only pdf files can be uploaded";
     }
  }

}
echo $file_result;

function addFileToSQL()
{
echo "It ran add SQL";
 
  
}
?>
