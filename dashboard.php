<?php
  session_start();
  if (!isset($_SESSION['login_user']))
  {
    header("location: login.php");
	die();
  }
  
?>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Note Boat</title>
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

    <div id ="logo" class="three columns">
      <a href="dashboard.html">
        <img class="u-full-width" src="images/logo2.png">
      </a>
    </div>

<div class="eight columns" style="text-align:center">
<h1>Time Table</h1>
</div>

    <div class="one column">
      <div class="dropdown">
         <button class="dropbtn">-----</button>
         <div class="dropdown-content">
         <a href="#">TimeTable</a>
         <a href="/NOTEBOAT/NotesSharing/notesShare.php">Note Sharing</a>
         <a href="/NOTEBOAT/NotesSharing/following.php">Following</a>
         <a href="settings.html">Settings</a>
         <a href="logout.php">Logout</a>
         </div>
      </div>
    </div>

  </div>
  </div>
  </section>

  <section class="main">
    <div class="container">
    <div class="row">

      <div class="twelve columns ">
      <div class="timetable">
hereeeeeeee

      </div>
     </div >
    </div>

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
