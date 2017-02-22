<?php
$file_result = "";
if ($_FILES["file"]["error"] > 0)
{
  $file_result .= "No file uploaded or invalid file";
  $file_result .= "Error Code: " .$_FILES["file"]["error"] . "<br>";
}
else
{
  $file_result . =
  "Upload: " . $_FILES["file"]["name"] . "<br>" .
  "Type: " . $_FILES["file"]["type"] . "<br>" .
  "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>" .
  "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

  move_uploaded_file($_FILES["file"]["tmp_name"],
  "/var/www/html/NOTEBOAT/uploads/" . $_FILES["file"]["name"]);

  $file_result .= "File uploaded successfully";
}
//
// if(isset($_FILES['file']))
// {
//   $file = $_FILES['file'];
//
//
//   //File properties
//   $file_name = $file['name'];
//   $file_tmp = $file['tmp_name'];
//   $file_size = $file['size'];
//   $file_error = $file['error'];
//
//   //Work out the file extensions
//   $file_ext = explode('.', $file_name);
//   $file_ext = strtolower(end($file_ext));
//
//   $allowed = array('txt');
//
//   if (in_array($file_ext, $allowed))
//   {
//     if ($file_error === 0)
//     {
//       if ($file_size <= 2097152)
//       {
//         $file_name_new = uniqid('', true) . '.' . $file_ext;
//         $file_destination = '/var/www/html/NoteBoat/uploads/' . $file_name_new;
//
//         if (move_uploaded_file($file_temp, $file_destination))
//         {
//           echo $file_destination;
//         }
//       }
//     }
//   }
// }
?>
