<?php
$file_result = "";
$loggedInUser = "mbaxask3";
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
     }
     else
     {
       $file_result .= "Only pdf files can be uploaded";
     }
  }

}
echo $file_result;
?>
