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
      <a href="dashboard.php">
        <img class="u-full-width" src="images/logo2.png">
      </a>
    </div>
  </div>
  </div>
  </section>

<!--   --------------------------------- semester 1 questions!!-->

    <section class="sem1">
    
    <div id="sem1div">
    <div class="container">
    <form action="php/setup.php" method="post">

    <h5 style="text-align:center">Semester 1</h5>

    <div class="row">
      <div class="ten columns offset-by-one">
      <label>Please select your level of confidence in each module. (1; you find it difficult to keep up in lectures and struggle with assignments. 5; you find the course easy, and understand newly introduced material with moderate effort.) </label>

      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10111 - Foundations of Pure Mathematics B  
    </div>
    </div>
    
    <div class="row">
      <div class="one columns offset-by-two">
        <input type="radio" name="MATH10111" value="1" checked> 1
      </div>  
      <div class="one columns offset-by-one">
        <input type="radio" name="MATH10111" value="2"> 2
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="MATH10111" value="3"> 3
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="MATH10111" value="4"> 4
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="MATH10111" value="5"> 5
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10131 - Calculus and Vectors B  
    </div>
    </div>
    
    <div class="row">
      <div class="one columns offset-by-two">
        <input type="radio" name="math10131" value="1" checked> 1
      </div>  
      <div class="one columns offset-by-one">
        <input type="radio" name="math10131" value="2"> 2
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="math10131" value="3"> 3
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="math10131" value="4"> 4
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="math10131" value="5"> 5
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP16121 - Object Oriented Programming with Java 1  
    </div>
    </div>
    
    <div class="row">
      <div class="one columns offset-by-two">
        <input type="radio" name="comp16121" value="1" checked> 1
      </div>  
      <div class="one columns offset-by-one">
        <input type="radio" name="comp16121" value="2"> 2
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp16121" value="3"> 3
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp16121" value="4"> 4
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp16121" value="5"> 5
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP10120 - First Year Team Project  
    </div>
    </div>
    
    <div class="row">
      <div class="one columns offset-by-two">
        <input type="radio" name="comp10120" value="1" checked> 1
      </div>  
      <div class="one columns offset-by-one">
        <input type="radio" name="comp10120" value="2"> 2
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp10120" value="3"> 3
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp10120" value="4"> 4
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp10120" value="5"> 5
      </div>
    </div>
    
     <div class="row">
      <div class="ten columns offset-by-one">
      <label>What day do you your have a weekly deadline for: </label>

      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10111 - Foundations of Pure Mathematics B  
    </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <select class="u-full-width" name="math10111deadline" >
        <option disabled="true" selected="true">Please select</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="0">No weekly deadlines</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10131 - Calculus and Vectors B  
    </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <select class="u-full-width" name="math10131deadline" >
        <option disabled="true" selected="true">Please select</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="0">No weekly deadlines</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP16121 - Object Oriented Programming with Java 1  
    </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <select class="u-full-width" name="comp16121deadline" >
        <option disabled="true" selected="true">Please select</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="0">No weekly deadlines</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP10120 - First Year Team Project  
    </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <select class="u-full-width" name="comp10120deadline" >
        <option disabled="true" selected="true">Please select</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="0">No weekly deadlines</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <label>Please select the amount of hours you are willing to spend working on the following modules: </label>
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10111 - Foundations of Pure Mathematics B 
    </div>
    </div>
    
    <div class="row">
      <div class="two columns offset-by-one">
        <input type="radio" name="math10111hr" value="1" checked> 1 hour
      </div>  
      <div class="two columns">
        <input type="radio" name="math10111hr" value="2"> 2 hours
      </div>
      <div class="two columns">
        <input type="radio" name="math10111hr" value="3"> 3 hours
      </div>
      <div class="two columns">
        <input type="radio" name="math10111hr" value="4"> 4 hours
      </div>
      <div class="three columns">
        <input type="radio" name="math10111hr" value="5"> 5 hours or more
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10131 - Calculus and Vectors B 
    </div>
    </div>
    
    <div class="row">
      <div class="two columns offset-by-one">
        <input type="radio" name="math10131hr" value="1" checked> 1 hour
      </div>  
      <div class="two columns">
        <input type="radio" name="math10131hr" value="2"> 2 hours
      </div>
      <div class="two columns">
        <input type="radio" name="math10131hr" value="3"> 3 hours
      </div>
      <div class="two columns">
        <input type="radio" name="math10131hr" value="4"> 4 hours
      </div>
      <div class="three columns">
        <input type="radio" name="math10131hr" value="5"> 5 hours or more
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP16121 - Object Oriented Programming with Java 1 
    </div>
    </div>
    
    <div class="row">
      <div class="two columns offset-by-one">
        <input type="radio" name="comp16121hr" value="1" checked> 1 hour
      </div>  
      <div class="two columns">
        <input type="radio" name="comp16121hr" value="2"> 2 hours
      </div>
      <div class="two columns">
        <input type="radio" name="comp16121hr" value="3"> 3 hours
      </div>
      <div class="two columns">
        <input type="radio" name="comp16121hr" value="4"> 4 hours
      </div>
      <div class="three columns">
        <input type="radio" name="comp16121hr" value="5"> 5 hours or more
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP10120 - First Year Team Project  
    </div>
    </div>
    
    <div class="row">
      <div class="two columns offset-by-one">
        <input type="radio" name="comp10120hr" value="1" checked> 1 hour
      </div>  
      <div class="two columns">
        <input type="radio" name="comp10120hr" value="2"> 2 hours
      </div>
      <div class="two columns">
        <input type="radio" name="comp10120hr" value="3"> 3 hours
      </div>
      <div class="two columns">
        <input type="radio" name="comp10120hr" value="4"> 4 hours
      </div>
      <div class="three columns">
        <input type="radio" name="comp10120hr" value="5"> 5 hours or more
      </div>
    </div>
        
    <div class="row">
       <div class="six columns offset-by-three">
         <button class="u-full-width" type="submit" style="margin-top:20px;">Submit Answers</button>
       </div>
    </div>

  </form>
  </div>
  
  </div>  
  
  </section>
  
<!-- ----------------------------------- semester 2 starts here-->
  
    <section class="sem2">
    <div id="sem2div">    
    
    <div class="container">
    <form action="php/setup.php" method="post">

    <h5 style="text-align:center">Semester 2</h5>

    <div class="row">
      <div class="ten columns offset-by-one">
      <label>Please select your level of confidence in each module. (1; you find it difficult to keep up in lectures and struggle with assignments. 5; you find the course easy, and understand newly introduced material with moderate effort.) </label>

      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10212 - Linear Algebra B  
    </div>
    </div>
    
    <div class="row">
      <div class="one columns offset-by-two">
        <input type="radio" name="math10212" value="1" checked> 1
      </div>  
      <div class="one columns offset-by-one">
        <input type="radio" name="math10212" value="2"> 2
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="math10212" value="3"> 3
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="math10212" value="4"> 4
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="math10212" value="5"> 5
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10232 - Calculus and Applications B  
    </div>
    </div>
    
    <div class="row">
      <div class="one columns offset-by-two">
        <input type="radio" name="math10232" value="1" checked> 1
      </div>  
      <div class="one columns offset-by-one">
        <input type="radio" name="math10232" value="2"> 2
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="math10232" value="3"> 3
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="math10232" value="4"> 4
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="math10232" value="5"> 5
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP16212 - Object Oriented Programming with Java 2  
    </div>
    </div>
    
    <div class="row">
      <div class="one columns offset-by-two">
        <input type="radio" name="comp16212" value="1" checked> 1
      </div>  
      <div class="one columns offset-by-one">
        <input type="radio" name="comp16212" value="2"> 2
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp16212" value="3"> 3
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp16212" value="4"> 4
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp16212" value="5"> 5
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP10120 - First Year Team Project  
    </div>
    </div>
    
    <div class="row">
      <div class="one columns offset-by-two">
        <input type="radio" name="comp10120" value="1" checked> 1
      </div>  
      <div class="one columns offset-by-one">
        <input type="radio" name="comp10120" value="2"> 2
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp10120" value="3"> 3
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp10120" value="4"> 4
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="comp10120" value="5"> 5
      </div>
    </div>
    

    <div class="row">
      <div class="ten columns offset-by-one">
      <label>Pick your optional module and your confidence in it:</label>
      <select class="u-full-width" name="semester" >
        <option disabled="true" selected="true">Please select</option>
        <option value="COMP18112">COMP18112 - Fundamentals of Distributed Systems</option>
        <option value="COMP14112">COMP14112 - Fundamentals of Artificial Intelligence</option>
        <option value="COMP11212">COMP11212 - Fundamentals of Computation</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
      <div class="one columns offset-by-two">
        <input type="radio" name="optional" value="1" checked> 1
      </div>  
      <div class="one columns offset-by-one">
        <input type="radio" name="optional" value="2"> 2
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="optional" value="3"> 3
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="optional" value="4"> 4
      </div>
      <div class="one columns offset-by-one">
        <input type="radio" name="optional" value="5"> 5
      </div>
    </div>
    
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <label>What day do you your have a weekly deadline for: </label>

      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10212 - Linear Algebra B
    </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <select class="u-full-width" name="math10212deadline" >
        <option disabled="true" selected="true">Please select</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="0">No weekly deadlines</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10232 - Calculus and Applications B
    </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <select class="u-full-width" name="math10232deadline" >
        <option disabled="true" selected="true">Please select</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="0">No weekly deadlines</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP16212 - Object Oriented Programming with Java 2
    </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <select class="u-full-width" name="comp16212deadline" >
        <option disabled="true" selected="true">Please select</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="0">No weekly deadlines</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP10120 - First Year Team Project  
    </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <select class="u-full-width" name="comp10120deadline" >
        <option disabled="true" selected="true">Please select</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="0">No weekly deadlines</option>
      </select> 
      </div>
    </div>
    
     <div class="row">
      <div class="ten columns offset-by-one">
      <label>Pick the optional module your are doing:</label>
      <select class="u-full-width" name="semesterDead" >
        <option disabled="true" selected="true">Please select</option>
        <option value="COMP18112">COMP18112 - Fundamentals of Distributed Systems</option>
        <option value="COMP14112">COMP14112 - Fundamentals of Artificial Intelligence</option>
        <option value="COMP11212">COMP11212 - Fundamentals of Computation</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
      <div class="ten columns offset-by-one">
      <label>Your optional module weekly deadline:</label>
      <select class="u-full-width" name="optionaldeadline" >
        <option disabled="true" selected="true">Please select</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="0">No weekly deadlines</option>
      </select> 
      </div>
    </div>
    
        <div class="row">
      <div class="ten columns offset-by-one">
      <label>Please select the number of hours you are willing to spend working on the following modules per week: </label>
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10212 - Linear Algebra B  
    </div>
    </div>
    
    <div class="row">
      <div class="two columns offset-by-one">
        <input type="radio" name="math10212hr" value="1" checked> 1 hour
      </div>  
      <div class="two columns">
        <input type="radio" name="math10212hr" value="2"> 2 hours
      </div>
      <div class="two columns">
        <input type="radio" name="math10212hr" value="3"> 3 hours
      </div>
      <div class="two columns">
        <input type="radio" name="math10212hr" value="4"> 4 hours
      </div>
      <div class="three columns">
        <input type="radio" name="math10212hr" value="5"> 5 hours or more
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      MATH10232 - Calculus and Applications B  
    </div>
    </div>
    
    <div class="row">
      <div class="two columns offset-by-one">
        <input type="radio" name="math10232hr" value="1" checked> 1 hour
      </div>  
      <div class="two columns">
        <input type="radio" name="math10232hr" value="2"> 2 hours
      </div>
      <div class="two columns">
        <input type="radio" name="math10232hr" value="3"> 3 hours
      </div>
      <div class="two columns">
        <input type="radio" name="math10232hr" value="4"> 4 hours
      </div>
      <div class="three columns">
        <input type="radio" name="math10232hr" value="5"> 5 hours or more
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP16212 - Object Oriented Programming with Java 2  
    </div>
    </div>
    
    <div class="row">
      <div class="two columns offset-by-one">
        <input type="radio" name="comp16212hr" value="1" checked> 1 hour
      </div>  
      <div class="two columns">
        <input type="radio" name="comp16212hr" value="2"> 2 hours
      </div>
      <div class="two columns">
        <input type="radio" name="comp16212hr" value="3"> 3 hours
      </div>
      <div class="two columns">
        <input type="radio" name="comp16212hr" value="4"> 4 hours
      </div>
      <div class="three columns">
        <input type="radio" name="comp16212hr" value="5"> 5 hours or more
      </div>
    </div>
    
    <div class="row">
    <div class="eight columns offset-by-two">
      COMP10120 - First Year Team Project  
    </div>
    </div>
    
    <div class="row">
      <div class="two columns offset-by-one">
        <input type="radio" name="comp10120hr" value="1" checked> 1 hour
      </div>  
      <div class="two columns">
        <input type="radio" name="comp10120hr" value="2"> 2 hours
      </div>
      <div class="two columns">
        <input type="radio" name="comp10120hr" value="3"> 3 hours
      </div>
      <div class="two columns">
        <input type="radio" name="comp10120hr" value="4"> 4 hours
      </div>
      <div class="three columns">
        <input type="radio" name="comp10120hr" value="5"> 5 hours or more
      </div>
    </div>
    

    <div class="row">
      <div class="ten columns offset-by-one">
      <label>Pick your optional module and specify the number of hours you are willing to spend working on it: </label>
      <select class="u-full-width" name="semesterHR" >
        <option disabled="true" selected="true">Please select</option>
        <option value="comp18112">COMP18112 - Fundamentals of Distributed Systems</option>
        <option value="comp14112">COMP14112 - Fundamentals of Artificial Intelligence</option>
        <option value="comp11212">COMP11212 - Fundamentals of Computation</option>
      </select> 
      </div>
    </div>
    
    <div class="row">
      <div class="two columns offset-by-one">
        <input type="radio" name="optionalhr" value="1" checked> 1 hour
      </div>  
      <div class="two columns">
        <input type="radio" name="optionalhr" value="2"> 2 hours
      </div>
      <div class="two columns">
        <input type="radio" name="optionalhr" value="3"> 3 hours
      </div> 
      <div class="two columns">
        <input type="radio" name="optionalhr" value="4"> 4 hours
      </div>
      <div class="three columns">
        <input type="radio" name="optionalhr" value="5"> 5 hours or more
      </div>
    </div>
    
    
    <div class="row">
       <div class="six columns offset-by-three">
         <button class="u-full-width" type="submit" style="margin-top:20px;">Submit Answers</button>
       </div>
    </div>

  </form>
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
<script>

function showDiv(toRemove)
{
   document.getElementById(toRemove).remove();
}

</script>
<?php
  session_start();
  
  $_SESSION['wkdayStartHr'] = $_POST['wkdayStartHr'];
  $_SESSION['wkdayStartMin'] = $_POST['wkdayStartMin'];
  $_SESSION['wkendStartHr'] = $_POST['wkendStartHr'];
  $_SESSION['wkendStartMin'] = $_POST['wkendStartMin'];
  $_SESSION['wkdayEndHr'] = $_POST['wkdayEndHr'];
  $_SESSION['wkdayEndMin'] = $_POST['wkdayEndMin'];
  $_SESSION['wkendEndHr'] = $_POST['wkendEndHr'];
  $_SESSION['wkendEndMin'] = $_POST['wkendEndMin'];
  $_SESSION['semester'] = $_POST["semester"];
  
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if($_POST["semester"] == "sem1")
    {
      echo '<script type="text/javascript"> showDiv("sem2div"); </script>';
    }
   else if($_POST["semester"] == "sem2")
   {
     echo '<script type="text/javascript"> showDiv("sem1div"); </script>';
   }
  }
?>
