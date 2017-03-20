<style type="text/css">
body {
  background-color:black;
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

<div id="timetableHolder">
  <div id="timetableHeader"style="left:0px; top:0px;">

  </div>

  <div id="timetableMeat">
  	    <div class="box" id="box1" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box2" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box3" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box4" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box5" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box6" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box7" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box8" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box9" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box10" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span>  <span></div>
        <div class="box" id="box11" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>
        <div class="box" id="box12" style="left:0px; top:0px; min-height: 162.5; background-color:red;"><span></span></div>



  </div>
</div>

div id="input">
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
  <option value="5">5</option>
  <option value="10">10</option>
  <option value="15">15</option>
  <option value="20">20</option>
  <option value="25">25</option>
  <option value="30">30</option>
  <option value="35">35</option>
  <option value="40">40</option>
  <option value="45">45</option>
  <option value="50">50</option>
  <option value="55">55</option>
</select>Mins<br><br>

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
  <option value="5">5</option>
  <option value="10">10</option>
  <option value="15">15</option>
  <option value="20">20</option>
  <option value="25">25</option>
  <option value="30">30</option>
  <option value="35">35</option>
  <option value="40">40</option>
  <option value="45">45</option>
  <option value="50">50</option>
  <option value="55">55</option>
</select><br><br>

> Activity Type*:<br>
<select name="Type" form="makeActivity">
  <option value="1">Revision</option>
  <option value="2">Extra curricular</option>
  <option value="3">Job</option>
  <option value="4">Misc</option>
</select><br><br>


  > Activity Colour*:<br>
  <input type="color" name="activityColour"><br>
  <input type="submit">
</form>


</div>

<script>

	var $table = $("#timetableHolder"),
  $tableMeat = $("#timetableMeat"),
  $tableHeader = $("#timetableHeader"),
	gridWidth = (($('#timetableHolder').width() -1)/8 ) ,
	gridHeight = ($('#timetableHolder').height() -1)/9,
	gridRows = 24,
	gridColumns = 8,
	boxCount =13,
  timeValue=12,
  dayHalf ="am",
  secondSwitch,
  arrayOfClasses,
	i, x, y, day, time ;

var m =0;

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

	$("<div/>").attr('id', 'container').css({position:"absolute", width: ((gridWidth)*(gridColumns-1)), height:( (gridHeight)*(gridRows)), top:gridHeight, left:gridWidth+1 }).prependTo($table);

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



for(i=1; i<=12; i++)
{
  document.getElementById('box'+i).style.top=((gridHeight/12 * (i-1) +1 )+'px');
  document.getElementById('box'+i).style.left=((gridWidth +1)+'px');
  document.getElementById('box'+i).style.minHeight=(((gridHeight)/12) -2 +'px');
  document.getElementById('box'+i).style.minWidth=((gridWidth-2)+'px');


}



function makeActivity(activId, startTime, duration) {
dayX = Math.floor(startTime/288)+1
dayY = startTime % 288


var string = 'string'

$("<div class='box' id='unmovableBox13' style='left:0px; top:0px; min-height: 162.5; background-color:red;'><span>Gossip with suvi</span></div>").appendTo('#timetableMeat');

document.getElementById(activId).style.top=(((gridHeight/12) *dayY +1 )+'px');
document.getElementById(activId).style.left=((gridWidth*dayX +1)+'px');
document.getElementById(activId).style.minHeight=(((gridHeight)/12) *duration -2 +'px');
document.getElementById(activId).style.minWidth=((gridWidth-2)+'px');


}


function extractClasses(activArray)
{
  for (i = 0; i < 21; i++)
  {
    var name = activArray[i][0]  ,
    sem = activArray[i][1],
    start = activArray[i][2],
    duration = activArray[i][3],
    weekNo = activArray[i][4],
    location = activArray[i][5],
    className = activArray[i][6];



   placeClass('unmovableBox', start, duration, name);

  }

}

function placeClass(activId, startTime, duration, name) {




dayX = Math.floor(startTime/288)+1;
dayY = startTime % 288;
var type = 'lec'


$("<div class='box' id='unmovableBox'  style='left:0px; top:0px; min-height: 162.5; background-color:red;'></div>").appendTo('#timetableMeat');

$('#unmovableBox').attr('id', 'unmovableBox'+m);
$('#unmovableBox'+m ).html('<span> '+name+'<br>'+type+'</span>');

document.getElementById('unmovableBox'+m).style.top=(((gridHeight/12) *dayY +1 )+'px');
document.getElementById('unmovableBox'+m).style.left=((gridWidth*dayX +1)+'px');
document.getElementById('unmovableBox'+m).style.minHeight=(((gridHeight)/12) *duration -2 +'px');
document.getElementById('unmovableBox'+m).style.minWidth=((gridWidth-2)+'px');


m++;
}





for(i=1; i<=boxCount; i++)
      $( "#box"+i ).draggable(  {grid: [gridWidth,gridHeight/12], containment: "#container",opacity: 0.7} );


/*
document.getElementById('box1').style.top=((gridHeight-gridHeight +1)+'px');
document.getElementById('box1').style.left=((gridWidth +1)+'px');
document.getElementById('box1').style.minHeight=((gridHeight/12) -2 +'px');
document.getElementById('box1').style.minWidth=((gridWidth-2)+'px');

*/
/*
 // making the container
	$("<div/>").attr('id', 'container').css({position:"absolute", width: ((gridWidth)*(gridColumns-1)), height:( (gridHeight)*(gridRows-1)), top:gridHeight-1, left:gridWidth-1}).prependTo($table);

  $("#input").css({left:0,  top: (gridHeight)*(gridRows+1)})

*/



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

    $conn->close();
  ?>


<script type="text/javascript">
   var jArray =<?php echo json_encode($mandatoryModulesArray); ?>;
   extractClasses(jArray);
  </script>
