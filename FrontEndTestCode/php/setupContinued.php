<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Setup</title>
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
      <a href="index.html">
        <img class="u-full-width" src="images/logo2.png">
      </a>
    </div>
  </div>
  </div>
  </section>

    
  <?php 
  if ($_POST["semester"] == "sem1") {
    <section class="main">
    <div class="container">
    <form action="php/setup.php" method="post">

    <div class="row">
      <div class="eight columns offset-by-two">
      <label>1. During a weekday, what is the time range you are willing to work?</label>
      <select class="u-full-width" id="studytime">
        <option value="Option 0">Please select</option>
        <option value="Option 1">Less than an hour</option>
        <option value="Option 2">Between 1 and 3 hours</option>
        <option value="Option 3">More than 3 hours</option>
      </select>
      </div>
    </div>
        
    <div class="row">
      <div class="eight columns offset-by-two">
      <label>2. During the weekend, what is the time range you are willing to work?</label>
      <select class="u-full-width" id="bestmod">
        <option value="Option 0">Please select</option>
        <option value="Option 1">MATH10212</option>
        <option value="Option 2">COMP16212</option>
        <option value="Option 3">MATH10232</option>
      </select>
      </div>
    </div>
<!--questions depending on semester after here--->

    <div class="row">
      <div class="eight columns offset-by-two">
      <label>3. What semester are are you currently in?</label>
      <select class="u-full-width" >
        <option value="Option 0" disabled="true">Please select</option>
        <option value="Option 1">Semester 1</option>
        <option value="Option 2">Semester 2</option>
      </select>      
      </div>
    </div>
        
    

    <div class="row">
       <div class="six columns offset-by-three">
         <button class="u-full-width" type="submit" style="margin-top:20px;">Submit Answers</button>
       </div>
    </div>

  </form>
  </div>
  </section>
  } else{
            <section class="main">
    <div class="container">
    <form action="php/setup.php" method="post">

    <div class="row">
      <div class="eight columns offset-by-two">
      <label>1. During a weekday, what is the time range you are willing to work?</label>
      <select class="u-full-width" id="studytime">
        <option value="Option 0">Please select</option>
        <option value="Option 1">Less than an hour</option>
        <option value="Option 2">Between 1 and 3 hours</option>
        <option value="Option 3">More than 3 hours</option>
      </select>
      </div>
    </div>
        
    <div class="row">
      <div class="eight columns offset-by-two">
      <label>2. During the weekend, what is the time range you are willing to work?</label>
      <select class="u-full-width" id="bestmod">
        <option value="Option 0">Please select</option>
        <option value="Option 1">MATH10212</option>
        <option value="Option 2">COMP16212</option>
        <option value="Option 3">MATH10232</option>
      </select>
      </div>
    </div>
<!--questions depending on semester after here--->

    <div class="row">
      <div class="eight columns offset-by-two">
      <label>3. What semester are are you currently in?</label>
      <select class="u-full-width" >
        <option value="Option 0" disabled="true">Please select</option>
        <option value="Option 1">Semester 1</option>
        <option value="Option 2">Semester 2</option>
      </select>      
      </div>
    </div>
        
    

    <div class="row">
       <div class="six columns offset-by-three">
         <button class="u-full-width" type="submit" style="margin-top:20px;">Submit Answers</button>
       </div>
    </div>

  </form>
  </div>
  </section>
  }
    
?>


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