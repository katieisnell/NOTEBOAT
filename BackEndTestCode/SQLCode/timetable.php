<style type="text/css">
body {
  background-color:black;
  color:pink;
  font-family: Signika Negative, Asap, sans-serif;
}

#timetableHolder {
  height:901px;
  width:1489px;
  overflow:visible;
  border:1px solid pink;
  padding:0;
  position:relative;
}


#timetableHeader {
  position: absolute;
  border:1px solid green;
  overflow:visible;
  /*min-width: 1167px;
  min-height: 99px;*/
}


#timetableMeat {
  position: absolute;
  padding:0;
  overflow-x:hidden;
  overflow-y:scroll;



}

div.grid{
    position: absolute;
    border:1px solid white;
	color:white;
	font-size: 20px;
  }
.box {
	text-align: center;
    display: table;
    overflow:visible;
	font-family: Arial, sans-serif;
	min-width: 136px;
	min-height: 59px;
  background-color:green;
	color: black;
	position: absolute;
	top:0;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	border:1px solid green;
}
  span {
  display: table-cell;
  vertical-align: middle;
  font-size: 16px;
}


.controls {
	background-color: #222;
	border: 1px solid #555;
	color: #bbb;
	font-size: 18px;
  margin: 20px 0;
}
.controls ul {
	list-style: none;
	padding: 0;
	margin: 0;900
}
.controls input {
  vertical-align:middle;
  cursor: pointer;
}
.controls .controlsTitle {
  border-right:1px solid #555;
  border-bottom:none;
  padding-right:10px;
}</style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="insertNewActivityWithButton.php"></script>

<div id="timetableHolder">
  <div id="timetableHeader"style="left:0px; top:0px;">

  </div>

  <div id="timetableMeat">

  </div>
</div>

<div id="input">
<h1>Make Activity</h1>
<form id="makeActivity" >
  > Activity Name*:<br>
  <input type="text" name="activityName" ><br><br>

  > Activity Length*:<br>
  <select name="activityLengthHrs" form="makeActivity">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  </select>Hours

  <select name="activityLengthMins" form="makeActivity">
  <option value="0">0</option>
  <option value="1">5</option>
  <option value="2">10</option>
  <option value="3">15</option>
  <option value="4">20</option>
  <option value="5">25</option>
  <option value="6">30</option>
  <option value="7">35</option>
  <option value="8">40</option>
  <option value="9">45</option>
  <option value="10">50</option>
  <option value="11">55</option>
  </select>Mins<br><br>

  > Start Day*:<br>
  <select name="startDay" form="makeActivity">
  <option value="0">Saturday</option>
  <option value="1">Sunday</option>
  <option value="2">Monday</option>
  <option value="3">Tuesday</option>
  <option value="4">Wednesday</option>
  <option value="5">Thursday</option>
  <option value="6">Friday</option>
  </select><br><br>

  > Start Time*:<br>
  <select name="startHour", form="makeActivity">
  <option value="0">12am</option>
  <option value="1">1am</option>
  <option value="2">2am</option>
  <option value="3">3am</option>
  <option value="4">4am</option>
  <option value="5">5am</option>
  <option value="6">6am</option>
  <option value="7">7am</option>
  <option value="8">8am</option>
  <option value="9">9am</option>
  <option value="10">10am</option>
  <option value="11">11am</option>
  <option value="12">12pm</option>
  <option value="13">1pm</option>
  <option value="14">2pm</option>
  <option value="15">3pm</option>
  <option value="16">4pm</option>
  <option value="17">5pm</option>
  <option value="18">6pm</option>
  <option value="19">7pm</option>
  <option value="20">8pm</option>
  <option value="21">9pm</option>
  <option value="22">10pm</option>
  <option value="23">11pm</option>
  </select> :

  <select name="startMin" form="makeActivity">
  <option value="0">0</option>
  <option value="1">5</option>
  <option value="2">10</option>
  <option value="3">15</option>
  <option value="4">20</option>
  <option value="5">25</option>
  <option value="6">30</option>
  <option value="7">35</option>
  <option value="8">40</option>
  <option value="9">45</option>
  <option value="10">50</option>
  <option value="11">55</option>
  </select><br><br>



  > Activity Type*:<br>
  <select name="activityType" form="makeActivity">
  <option value="1">Revision</option>
  <option value="2">Extra curricular</option>
  <option value="3">Job</option>
  <option value="4">Misc</option>
  </select><br><br>


  > Activity Colour*:<br>
  <input type="color" name="activityColour"><br>
  <input type="submit">
</form>

<form id="form" action="insertNewActivityWithButton.php" method="post">
  <input type="hidden" name="array" id="array">
  <input type="hidden" name="arrayRemoving" id="arrayRemoving">
</form>
<button id="saveChanges">Save Changes</button>

</div>

<script>

var $table = $("#timetableHolder"),
$tableMeat = $("#timetableMeat"),
$tableHeader = $("#timetableHeader"),
gridWidth = (($('#timetableHolder').width() -1)/8 ) ,
gridHeight = ($('#timetableHolder').height() -1)/9,
gridRows = 24,
gridColumns = 8,
boxCount =0,
timeValue=12,
dayHalf ="am",
secondSwitch,
arrayOfClasses,
arrayToAdd = [],
arrayToRemove = [],
allActivities = [],
divsToRemove = [],
i, x, y, day, time;
var m=0;


  //header of timetable

  document.getElementById('timetableHeader').style.width= ((gridWidth*8)  +'px');
  document.getElementById('timetableHeader').style.minHeight= ((gridHeight-1) +'px');

  $tableMeat.height(gridHeight*8);
  $tableMeat.width(gridWidth*8 );
  $('#timetableMeat').css('top', gridHeight)

  //making a grid yo

  for (i = 0; i < 8; i++) {
  	y = Math.floor(i / gridColumns) * gridHeight -1;
  	x = (i * gridWidth) % (gridColumns * gridWidth) -1;
    if (x> gridWidth*8 )
      x=0

  	$("<div/>").text(time).attr('class', "grid").css({ width:gridWidth-1, height:gridHeight-1, top:y, left:x}).prependTo($tableHeader);
  }
  x=0;
  y=0;
  for (i = 0; i < gridRows *gridColumns ; i++) {
  	y = Math.floor(i / gridColumns) * gridHeight  ;
  	x = (i * gridWidth) % (gridColumns * gridWidth)  ;
    if (x> gridWidth*7.5 )
      x=0

  	getDay(i);
  	$("<div/>").text(time).attr('class', "grid").css({ width:gridWidth-1, height:gridHeight-1, top:y, left:x}).prependTo($tableMeat);
  }

  	$("<div/>").attr('arrayRemovingid', 'container').css({position:"absolute", width: ((gridWidth)*(gridColumns-1)+1), height:( (gridHeight)*(gridRows)), top:gridHeight, left:gridWidth }).prependTo($table);

  function getType(type){
    var typeName;
    switch(type){
  		case "1": typeName = "Revision"; break;
  		case "2": typeName = "Extra Curricular";  break;
  		case "3": typeName = "Job";  break;
  		case "4": typeName = "Misc"; break;
      default: typeName ="Misc";
    }

    return typeName;

  }
  function getDay(index) {

    if(index%8 == 0)
    {
      time = "" + timeValue + dayHalf;

      timeValue++;
      if(timeValue ==13)
      {
        timeValue-=12;
        if(secondSwitch)
          dayHalf = "pm";
        secondSwitch = true;
      }
      }
    else
      time = "";

  }

  for (i = 1; i < gridColumns; i++) {
  	y = Math.floor(i / gridColumns) * gridHeight;
  	x = (i * gridWidth) % (gridColumns * gridWidth);
  	switch(i){
  		case 3:
  		  day = "Monday";
  		  break;
  		case 4:
  		  day = "Tuesday";
  		  break;
  		case 5:
  		  day = "Wednesday";
  		  break;
  		case 6:
  		  day = "Thursday";
  		  break;
  		case 7:
  		  day = "Friday";
  		  break;
  		case 1:
  		  day = "Saturday";
  		  break;
  		case 2:
  		  day = "Sunday";
  		  break;
  	}
  	$("<div/>").text(day).attr('class','grid').css({ width:gridWidth-1, height:gridHeight-1, top:0, left:x,  "text-align":"center"}).prependTo($table);
  }


  function updateStart(id, top, left){
    for( index = 0; index<allActivities.length; index++){
        if(allActivities[index][0]==id){
          alert("in da loop");
          var dayX = (left -1)/ (gridWidth);
          var dayY = (top -1)/ (gridHeight/12);

          var newStart = parseInt(288*(dayX-1)) + parseInt(dayY);
          newStart = Math.floor(newStart);
          allActivities[index][6]= newStart;
        }
      }
    }


  function updateDraggables(){
    for(i=1; i<=boxCount; i++)
          $( "#box"+i ).draggable(  {
            stop: function(){
                var id = $(this).attr('id');
                var top = $(this).position().top;
                var left = $(this).position().left;
                updateStart(id, top, left);
              }, grid: [gridWidth,gridHeight/12], containment: "#container",opacity: 0.7} );
    }

  updateDraggables();

  function placeActivity(name, startTime, duration, type, colour) {

    dayX = Math.floor(startTime/288)+1;
    dayY = startTime % 288;
    boxCount++


    $("<div class='box' id='box' style='left:0px; top:0px; min-height: 0px; background-color:yellow;'></div>").appendTo('#timetableMeat');
    //
    var typeString=getType(type);
    $('#box').attr('id', 'box'+boxCount);
    $('#box'+boxCount ).html('<span> '+name+'<br>'+typeString+'</span>');
    $('#box'+boxCount ).contextmenu(function(){
        var confirmDelete = confirm("delete this div or nah");
        if(confirmDelete){
          var id = $(this).attr('id');
          divsToRemove.push(id)
          $(this).remove();
          arrayToRemove.push([type, name, startTime, duration, colour]);
        }
      }
    );

    document.getElementById('box'+boxCount).style.top=(((gridHeight/12) *dayY +1 )+'px');
    document.getElementById('box'+boxCount).style.left=((gridWidth*dayX +1)+'px');
    document.getElementById('box'+boxCount).style.minHeight=(((gridHeight)/12) *duration -2 +'px');
    document.getElementById('box'+boxCount).style.minWidth=((gridWidth-2)+'px');

    updateDraggables();

     var id2 = 'box'+boxCount;
     alert(id2);

     allActivities.push([id2,type, name, startTime, duration, colour, startTime]);

  }

  function placeClass(name, startTime, duration, type) {


    dayX = Math.floor(startTime/288)+1;
    dayY = startTime % 288;


    $("<div class='box' id='unmovableBox'  style='left:0px; top:0px; min-height: 162.5; background-color:red;'></div>").appendTo('#timetableMeat');

    $('#unmovableBox').attr('id', 'unmovableBox'+m);
    $('#unmovableBox'+m ).html('<span> '+name+'<br>'+type+'</span>');

    document.getElementById('unmovableBox'+m).style.top=(((gridHeight/12) *dayY +1 )+'px');
    document.getElementById('unmovableBox'+m).style.left=((gridWidth*dayX +1)+'px');
    document.getElementById('unmovableBox'+m).style.minHeight=(((gridHeight)/12) *duration -2 +'px');
    document.getElementById('unmovableBox'+m).style.minWidth=((gridWidth-2)+'px');

    m++;
  }

  function extractClasses(activArray){
    for (index = 0; index < activArray.length; index++)
    {
      var name = activArray[index][0]  ,
      sem = activArray[index][1],
      start = activArray[index][2],
      duration = activArray[index][3],
      weekNo = activArray[index][4],
      location = activArray[index][5],
      className = activArray[index][6];

      placeClass(name, start, duration, className);

    }
  }

  function extractActivities(activArray){
    var shizInArray = activArray.length;
    for (index = 0; index < activArray.length; index++)
    {
      var name = activArray[index][1]  ,
      start = activArray[index][2],
      duration = activArray[index][3],
      type = activArray[index][0]
      colour = activArray[index][4];


      placeActivity(name, start, duration, type, colour);

    }
  }

  $("#makeActivity").submit(function(e) {
      e.preventDefault();
  });

  $("#makeActivity").submit(function(){
   var name = document.forms["makeActivity"]["activityName"].value;
   var duration = parseInt(document.forms["makeActivity"]["activityLengthHrs"].value * 12) + parseInt(document.forms["makeActivity"]["activityLengthMins"].value);
   var startTime = parseInt(document.forms["makeActivity"]["startDay"].value * 288) + parseInt(document.forms["makeActivity"]["startHour"].value*12) +parseInt(document.forms["makeActivity"]["startMin"].value);
   var activityType = document.forms["makeActivity"]["activityType"].value;
   var colour = document.forms["makeActivity"]["activityColour"].value;
   arrayToAdd.push([activityType, name, startTime, duration, colour]);
   if(duration>0)
     placeActivity(name, startTime, duration, activityType, colour);

  });

  function removeDiv(div, type, name, startTime, duration, colour ){
    var confirmDelete = confirm("delete this div or nah");
    if(confirmDelete){
      div.remove()
    //arrayToRemove.push([type, name, startTime, duration, colour]);

    }
  }


  function movedActivities(){
    for( index = 0; index<allActivities.length; index++){
      for(index2 = 0; index2<divsToRemove.length; index2++)
        if(allActivities[index][0]==divsToRemove[indx2])
          allActivities.splice(index, 1)
    }

    for( index = 0; index<allActivities.length; index++){
      if(allActivities[index][3]!=allActivities[index][6]){
        alert("yo mama");
        var name =allActivities[index][2],
        type = allActivities[index][2],
        startTime=allActivities[index][3],
        duration = allActivities[index][4],
        colour = allActivities[index][5],
        newStartTime = allActivities[index][6];

        arrayToRemove.push(type, name, startTime, duration);
        arrayToAdd.push(type, name, newStartTime, duration);
      }

    }
  }



  function passArray() {

    movedActivities();
    $('#array').val(JSON.stringify(arrayToAdd));
    $('#arrayRemoving').val(JSON.stringify(arrayToRemove));
    //console.log(JSON.stringify(array));
    $('#form').submit();
    arrayToAdd =[];
  }




  $(document).ready(function() {

    $('#saveChanges').click(passArray);
  });
  </script>







  <?php

    require_once('config.inc.php');
    $conn = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // The user we will be getting the details of; currently testing with mbaxaks2
    $userID = "mbaxaks2";

    // SQL statement which gets the student's course
    $sqlFindCourse = "SELECT courseID, schoolYear FROM registeredUsers WHERE userID='" . $userID . "'";

    $resultFindCourse = $conn->query($sqlFindCourse);

    if ($resultFindCourse->num_rows > 0) {
      while($row = $resultFindCourse->fetch_assoc()) {
        $courseID = $row['courseID'];
        $schoolYear = $row['schoolYear'];
      }
    } else {
    echo "0 results from find course";
    }


    // Now we have the modules they can do, we have to find out more specific details about each module
    // Basically have to figure out what is mandatory, what semster the modules happen in
    $sqlFindMandatoryModules = "SELECT courseTimetable.moduleID, moduleInfo.isMandatory,
                                                             moduleInfo.semesterNo,  moduleClasses.startTime, moduleClasses.duration,
                                                             moduleClasses.weekNo, moduleClasses.location, moduleClasses.className
                                                             FROM courseTimetable
                                                             LEFT JOIN moduleInfo ON courseTimetable.moduleID=moduleInfo.moduleID
                                                             LEFT JOIN moduleClasses on courseTimetable.moduleID=moduleClasses.moduleID
                                                             WHERE courseTimetable.courseID='" . $courseID . "' AND courseTimetable.schoolYear='"
                                                                                                                                                                 . $schoolYear . "'";


    $resultFindMandatoryModules = mysqli_query($conn, $sqlFindMandatoryModules);

    // 2D arrays which store: (moduleID, semesterNo, start time of lec, duration of it, what weekno the lec is on, the location,
    // and the class name which will be the output to the user of what it is
    $mandatoryModulesArray  = array();

    // Just store these here for now, this will not be used in this php though
    $optionalModulesArray  = array();

    if (mysqli_num_rows($resultFindMandatoryModules) > 0) {
      while($row = $resultFindMandatoryModules->fetch_assoc()) {

        if ($row['isMandatory'] == 1) {
          array_push($mandatoryModulesArray, array($row['moduleID'], $row['semesterNo'], $row['startTime'],
                                                                                              $row['duration'], $row['weekNo'], $row['location'], $row['className']));
        } else {
          array_push($optionalModulesArray, array($row['moduleID'], $row['semesterNo'], $row['startTime'],
                                                                                              $row['duration'], $row['weekNo'], $row['location'], $row['className']));
        }

      }
    } else {
    echo "0 results from find mandatory modules";
    }




    // Get all the activities the student does
    $sqlGetActivities = "SELECT activityType, activityName, startTime, duration, colour
                                       FROM studentActivities
                                       WHERE userID='" . $userID . "'";

    $userActivitiesArray = array();

    $resultGetActivities = mysqli_query($conn, $sqlGetActivities);

    if (mysqli_num_rows($resultGetActivities) > 0) {
      while($row = $resultGetActivities->fetch_assoc()) {

          array_push($userActivitiesArray, array($row['activityType'], $row['activityName'],
                                                 $row['startTime'], $row['duration'], $row['colour']));

      }
    } else {
      echo "0 results from find optional modules";
    }






    $conn->close();
  ?>


<script type="text/javascript">
   var jArray =<?php echo json_encode($mandatoryModulesArray); ?>;
   extractClasses(jArray);
   var jArray2 =<?php echo json_encode($userActivitiesArray); ?>;
   extractActivities(jArray2);
  </script>
