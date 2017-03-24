<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['login_user']))
  {
    header("location: login.php");
  }
?>

<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Set Up</title>
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

  <section class="header">
  <div class="container">
  <div class="row">

    <div id ="logo" class="six columns offset-by-three">
      <a href="dashboard.html">
        <img class="u-full-width" src="images/logo2.png">
      </a>
    </div>

  </div>
  </div>
  </section>

  <section class="main">
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h5>Set up</h5>
      </div>
    </div>
      
    <div class="row">
      <div class="twelve columns">
          <p>In order to set up your account you are required to fill in a questionnaire.</p>
          
          <p> But first, please read our <a href="http://10.2.238.64/NOTEBOAT/termsAndConditions.html">terms and conditions</a> and tick below that you accept them.</p>
      </div>
    </div>
 
   <label>I have read and understood the terms and conditions</label><form action ="" method="post"enctype="multipart/form-data"><input type='checkbox' name='ticked' value='yes' /><input type ='submit' value = 'submit'/></form>
  </div>
  </section>




   

  <section class="footer">
  <div class="container">
  <div class="row">
    <div id="navigation" class="twelve columns">
      <nav>
      <ul>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="termsAndConditions.html">Terms &amp; Conditions</a></li>
      </ul>
    </nav>
    </div>
  </div>
  </div>
  </section>

</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['ticked']))
  {
     echo '<script type="text/javascript"> alert("Click OK to start the questionnaire!"); window.location.href="initialsetup.html"; </script>';
   }
   else
   {
     echo '<script type="text/javascript"> alert("You need to agree to the terms and conditions!"); window.location.href="startSetUp.php"; </script>';
   }
}
?>

