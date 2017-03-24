<style type="text/css">




body {
  background-color:white;
  color:black;
  font-family: Signika Negative, Asap, sans-serif;
}

#timetableHolder {
  height:901px;
  width:1489px;
  overflow:visible;
  border:1px solid #164c56;
  padding:0;
  position:relative;
  background-color: #aec6cf;
}


#timetableHeader {
  position: absolute;
  border:1px solid #164c56;
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
::-webkit-scrollbar {display:none;}

#makeActivity{
  display: inline;
}

div.grid{
    position: absolute;
    border:1px solid #164c56;
	color:#164c56;
	font-size: 20px;

  }

.box {
	text-align: center;
    display: table;
    overflow:hidden;
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
	border:2px solid white;
  word-wrap: break-word;
  text-overflow: ellipsis;
}
span {
  display: table-cell;
  white-space: nowrap;
  vertical-align: middle;
  font-size: 16px;
  overflow: hidden;
  text-overflow: ellipsis;
  word-wrap: break-word;
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="insertNewActivityWithButton.php"></script>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div id="timetableHolder">
  <div id="timetableHeader"style="left:0px; top:0px;">

  </div>

  <div id="timetableMeat">

  </div>
</div>

<div id="input">
  <h1>Make Activity</h1>
  <form id="makeActivity" >
    Name*:  <input type="text" name="activityName" ><br><br>

    Type*:
    <select name="activityType" form="makeActivity">
    <option value="1">Revision</option>
    <option value="2">Extra curricular</option>
    <option value="3">Job</option>
    <option value="4">Misc</option>
    </select><br><br>

    Start day*:
    <select name="startDay" form="makeActivity">
    <option value="0">Saturday</option>
    <option value="1">Sunday</option>
    <option value="2">Monday</option>
    <option value="3">Tuesday</option>
    <option value="4">Wednesday</option>
    <option value="5">Thursday</option>
    <option value="6">Friday</option>
    </select><br><br>

    Start time*:
    <select name="startHour", form="makeActivity">
    <option value="0">00</option>
    <option value="1">01</option>
    <option value="2">02</option>
    <option value="3">03</option>
    <option value="4">04</option>
    <option value="5">05</option>
    <option value="6">06</option>
    <option value="7">07</option>
    <option value="8">08</option>
    <option value="9">09</option>
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
    </select> :

    <select name="startMin" form="makeActivity">
    <option value="0">00</option>
    <option value="1">05</option>
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

    Length*:
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
  </select> hrs

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
  </select> mins<br><br>


    Colour*:
    <select name="activityColour" form="makeActivity">
    <option value="#5DFDCB" style="background-color: #5DFDCB;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    </option>
    <option value="#AD7A99" style="background-color: #AD7A99;">    </option>
    <option value="#558564" style="background-color: #558564;">    </option>
    <option value="#442B48" style="background-color: #442B48;">    </option>
    <option value="#F9B9F2" style="background-color: #F9B9F2;">    </option>
  </select><br><br>
    <input type="submit">
  </form>

<form id="form" action="insertNewActivityWithButton.php" method="post">
  <input type="hidden" name="array" id="array">
  <input type="hidden" name="arrayRemoving" id="arrayRemoving">
</form>
<button id="saveChanges" style="display:none;" >Save Changes</button>

</div>

<div>
  <button id="subtractWeek" onclick="subtractWeek()">-</button><span id="weekNo"></span>  <button id="addWeek" onclick="addWeek()">+</button>

</div>

<div id='progressBars'>

  </div>
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
moduleArray = [],
pointsToCompare = [],
i, x, y, day, time,
doneQuestionnaire = true,
currentWeekNo,
currentSemester,
currentWeek,
classIndex=0;






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

  	$("<div/>").attr('id', 'container').css({position:"absolute", width: ((gridWidth)*(gridColumns-1)+1), height:( (gridHeight)*(gridRows)), top:gridHeight, left:gridWidth }).prependTo($table);

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
    var duration;
    for( index = 0; index<allActivities.length; index++){
        if(allActivities[index][0]==id){
          var dayX = Math.round((left -1)/ (gridWidth));
          top = top -1 + parseInt($("#timetableMeat").scrollTop())
          var dayY = Math.round(top/ (gridHeight/12));
          var newStart = parseInt(288*(dayX-1)) + parseInt(dayY);
          duration= allActivities[index][4];
          allActivities[index][6]= newStart;
          if(newStart !=allActivities[index][3])
          $("#saveChanges").show();

        }

      }

    for( index = 0; index<pointsToCompare.length; index++)
      if(pointsToCompare[index][0]==id){
        pointsToCompare[index][1]=dayX;
        pointsToCompare[index][2]=dayY;
        pointsToCompare[index][3]=parseInt(dayY)+parseInt(duration);
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
    if(duration>5)
      $('#box'+boxCount ).html('<span id="boxSpan"> '+name+'<br>'+typeString+'</span>');
    else if(duration >2)
      $('#box'+boxCount ).html('<span id="boxSpan">...</span>');
    else
      $('#box'+boxCount ).html('<span id="boxSpan"></span>');
    $('#boxSpan' ).attr('id', 'boxSpan'+boxCount);


    document.getElementById('box'+boxCount).style.top=(((gridHeight/12) *dayY +1 )+'px');
    document.getElementById('box'+boxCount).style.left=((gridWidth*dayX +1)+'px');
    document.getElementById('box'+boxCount).style.minHeight=(((gridHeight)/12) *duration -4 +'px');
    document.getElementById('box'+boxCount).style.minWidth=((gridWidth-4)+'px');
    document.getElementById('box'+boxCount).style.maxHeight=(((gridHeight)/12) *duration -4 +'px');
    document.getElementById('box'+boxCount).style.maxWidth=((gridWidth-4)+'px');
    document.getElementById('boxSpan'+boxCount).style.minHeight=(((gridHeight)/12) *duration -4 +'px');
    document.getElementById('boxSpan'+boxCount).style.minWidth=((gridWidth-4)+'px');
    document.getElementById('boxSpan'+boxCount).style.maxHeight=(((gridHeight)/12) *duration -4 +'px');
    document.getElementById('boxSpan'+boxCount).style.maxWidth=((gridWidth-4)+'px');
    $('#box'+boxCount ).css('background-color', colour);

    updateDraggables();

     var id2 = 'box'+boxCount;


     allActivities.push([id2,type, name, startTime, duration, colour, startTime]);

    pointsToCompare.push([id2 ,dayX, dayY, parseInt(dayY)+parseInt(duration)]);

    $("<div class='box' id='boxDialog'></div>").appendTo("#"+id2);
    $('#boxDialog').attr('id', id2+'Dialog');


    addDialogActivity(id2, type, name, startTime, duration, colour);

  }

  function placeClass(name, startTime, duration, className, weekNo, sem, colour, weekNo, location) {


    dayX = Math.floor(startTime/288)+1;
    dayY = startTime % 288;


    $("<div class='box' id='unmovableBox'  style='left:0px; top:0px; min-height: 162.5; background-color:red;'></div>").appendTo('#timetableMeat');

    $('#unmovableBox').attr('id', 'unmovableBox'+classIndex);
    $('#unmovableBox'+classIndex ).html('<span> '+name+'<br>'+className+'</span>');

    document.getElementById('unmovableBox'+classIndex).style.top=(((gridHeight/12) *dayY +1 )+'px');
    document.getElementById('unmovableBox'+classIndex).style.left=((gridWidth*dayX +1)+'px');
    document.getElementById('unmovableBox'+classIndex).style.minHeight=(((gridHeight)/12) *duration -4 +'px');
    document.getElementById('unmovableBox'+classIndex).style.minWidth=((gridWidth-4)+'px');
    $('#unmovableBox'+classIndex ).css('background-color', colour);


    pointsToCompare.push(['unmovableBox'+classIndex, dayX, dayY, parseInt(dayY)+parseInt(duration)]);

    $("<div class='box' id='box1Dialog'></div>").appendTo("#unmovableBox"+classIndex);
    $('#box1Dialog').attr('id',  'Dialog'+classIndex );


    addDialogClass(name, startTime, duration, className, weekNo, sem, weekNo, location);
        classIndex++;
  }

  function extractClasses(){
    for (index = 0; index < jArray.length; index++)
    {
      var name = jArray[index][0]  ,
      sem = jArray[index][7],
      start = jArray[index][2],
      duration = jArray[index][3],
      weekNo = jArray[index][4],
      location = jArray[index][5],
      className = jArray[index][6],
      colour="blue";

      for(index2=0; index2<moduleArray.length; index2++){
        if(moduleArray[index2][0]==name)
          colour = moduleArray[index2][3];
      }

      if(sem == currentSemester && (weekNo == currentWeekNo || weekNo ==0))
        placeClass(name, start, duration, className, weekNo, sem, colour, weekNo, location);

    }
  }

  function extractActivities(){
    for (index = 0; index < jArray2.length; index++)
    {
      var name = jArray2[index][1]  ,
      start = jArray2[index][2],
      duration = jArray2[index][3],
      type = jArray2[index][0]
      colour = jArray2[index][4];


      placeActivity(name, start, duration, type, colour);
      for(index2=0; index2<moduleArray.length; index2++)
        if(moduleArray[index2][0]==name){
          addProgress(name, 12);
        }
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

   if(duration>0 && name!="" && (startTime%288 +duration) < 289 ){
    placeActivity(name, startTime, duration, activityType, colour);
    arrayToAdd.push([activityType, name, startTime, duration, colour]);
    $("#saveChanges").show();
   }
    if(!(duration>0) )
    alert("Please set a length for the activity");
    if(!(name!=""))
    alert("Please name your activity");
    if(!((startTime%288 +duration) < 289) )
    alert("Please ensure your activity does not exceed day length")

    for(index=0; index<moduleArray.length;index++)
      if(moduleArray[index][0]==name)
        addProgress(name, duration);


  });

  function removeDiv(div, type, name, startTime, duration, colour ){
    var confirmDelete = confirm("Click OK to confirm that you want to delete this activity");
    if(confirmDelete){
      div.remove()
    arrayToRemove.push([type, name, startTime, duration, colour]);

    for(index=0; index<moduleArray.length;index++)
      if(moduleArray[index][0]==name)
        removeProgress(name, duration);
    $("#saveChanges").show();

    }
  }


  function movedActivities(){
    for( index = 0; index<allActivities.length; index++){
      for(index2 = 0; index2<divsToRemove.length; index2++)
        if(allActivities[index][0]==divsToRemove[index2])
          allActivities.splice(index, 1)
    }

    for( index = 0; index<allActivities.length; index++){
      if(allActivities[index][3]!=allActivities[index][6]){

        var name =allActivities[index][2],
        type = allActivities[index][1],
        startTime=allActivities[index][3],
        duration = allActivities[index][4],
        colour = allActivities[index][5],
        newStartTime = allActivities[index][6];



        arrayToRemove.push([type, name, startTime, duration, colour]);
        arrayToAdd.push([type, name, newStartTime, duration, colour]);
      }

    }
  }


  function passArray() {
    if(!overlaps()){
    movedActivities();
    $('#array').val(JSON.stringify(arrayToAdd));
    $('#arrayRemoving').val(JSON.stringify(arrayToRemove));
    //console.log(JSON.stringify(array));
    $('#form').submit();
  }
  else
    alert("Please ensure there are no overlaps");

  }

  function setModuleColours(){
    var colourIndex = 0;
    for(index=0; index<moduleArray.length; index++){
      moduleArray[index].push(getColour(colourIndex));
      colourIndex = (colourIndex+1)%6;
    }
  }

  function getColour(colourIndex){
    var colourToReturn;
    switch(colourIndex){
      case 1 : colourToReturn = "#8783D1"; break;
      case 2 : colourToReturn = "#92B9BD"; break;
      case 3 : colourToReturn = "#942911"; break;
      case 4 : colourToReturn = "#9D8420"; break;
      case 5 : colourToReturn = "#593837"; break;
      default: colourToReturn = "#8783D1";
    }
    return colourToReturn
  }

  function getWeekDetails(){

    currentWeekNo = currentWeek%2;
    if(currentWeekNo == 0)
      currentWeekNo+=2;

    if(currentWeek<13)
      currentSemester=1;
    else
      currentSemester=2;

      document.getElementById('weekNo').textContent = ""+currentWeek;

  }

  function addWeek(){
    if(currentWeek!=24){
      currentWeek++
      getWeekDetails();
      clearClasses();
      extractClasses();
    }
  }

  function subtractWeek(){
    if(currentWeek!=1){
      currentWeek--
      getWeekDetails();
      clearClasses();
      extractClasses();
    }
  }

  function clearClasses(){
    for(index=0; index<=classIndex; index++)
      $('#unmovableBox'+index ).remove();
    classIndex=0;
  }

  function overlaps(){
    for(index = 0; index<pointsToCompare.length; index++ )
      for(index2 = index+1; index2<pointsToCompare.length; index2++)
        if(pointsToCompare[index][1]==pointsToCompare[index2][1]){
                var startsAfter = pointsToCompare[index][2]>=pointsToCompare[index2][3];
                var endsBefore = pointsToCompare[index][3]<=pointsToCompare[index2][2];
                var overlap = !( startsAfter || endsBefore );
          if(overlap)
            return true;
        }

      return false;
  }


  function addDialogActivity(id2, type, name, startTime, duration, colour){
    type=getType(type);
    $( "#"+id2+"Dialog" ).html("Name:"+ name +'<br>'+"Type:"+type);
    $( "#"+id2+"Dialog" ).dialog({
                 autoOpen: false,
                 buttons: {
                    'OK': function() {$(this).dialog("close");},
                    'Delete': function() {$(this).dialog("close"); removeDiv($("#"+id2), type, name, startTime, duration, colour )}
                 },
                 title: name,
                 position: {
                    my: " center",
                    at: " center"
                 }
              });


    $("#"+id2).dblclick(function(){  $( "#"+id2+"Dialog" ).dialog( "open" );});
  }

  function   addDialogClass(name, start, duration, className, weekNo, sem, weekNo, location){
    if(weekNo==0)
      weekNo ="Both";
    $(  "#Dialog"+classIndex ).html("Name: "+ name +'<br>'+"Type: "+className+'<br>'+"Week Number: "+weekNo+'<br>'+"Semester: "+sem
                                      +'<br>'+"Location: "+location);
    $(  "#Dialog"+classIndex ).dialog({
                 autoOpen: false,
                 buttons: {
                    'OK': function() {$(this).dialog("close");}
                 },
                 title: name,
                 position: {
                    my: " center",
                    at: " center"
                 }
              });

    var dialogBox =$( "#Dialog"+classIndex );
    $("#unmovableBox"+classIndex).dblclick(function(){ dialogBox.dialog( "open" ); });

  }


  $(document).ready(function() {

    $('#saveChanges').click(passArray);
  });

  function placeBars(){
    for(index=0; index<moduleArray.length; index++){
      dropABar(moduleArray[index][0],moduleArray[index][2],moduleArray[index][3]);
    }
  }

  function dropABar(moduleToStudy, hoursToStudy,colour){

    var minsToStudy = hoursToStudy*12;
    $("<h3>"+moduleToStudy+": "+ hoursToStudy+ " Hours</h3>").appendTo('#progressBars');
    $("<div class='progress' id='progress1'></div>").appendTo('#progressBars');
    $("#progress1").attr('id', 'progress'+moduleToStudy)
    $("<div class='progress-bar' id='ProgressBar1' role='progressbar' aria-valuenow='0' aria-valuemin='0' aria-valuemax='0' style='width:00%'></div>").appendTo('#progress'+moduleToStudy);
    $("#ProgressBar1").attr('id', 'ProgressBar'+moduleToStudy)
    $('#ProgressBar'+moduleToStudy).css('background-color', colour);
    $('#ProgressBar'+moduleToStudy).attr('aria-valuemax', minsToStudy);
  }

  function addProgress(Module, duration){
  	//var percentageToAdd = duration/reccomendedTime *100
    var totalTime  = $('#ProgressBar'+Module).attr('aria-valuemax');
    var currentValue = $('#ProgressBar'+Module).attr('aria-valuenow');
  	var newValue = parseInt(duration)+parseInt(currentValue) ;
    var newPercentage = (newValue *100) / totalTime;
  	$('#ProgressBar'+Module).attr('aria-valuenow', newValue);
  	$('#ProgressBar'+Module).css('width', (newPercentage+"%"));


  }

  function removeProgress(Module, duration){
  	//var percentageToAdd = duration/reccomendedTime *100
    var totalTime  = $('#ProgressBar'+Module).attr('aria-valuemax');
    var currentValue = $('#ProgressBar'+Module).attr('aria-valuenow');
  	var newValue = parseInt(currentValue)-parseInt(duration) ;
    var newPercentage = (newValue *100) / totalTime;
  	$('#ProgressBar'+Module).attr('aria-valuenow', newValue);
  	$('#ProgressBar'+Module).css('width', (newPercentage+"%"));

  }

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

    $sqlFindMandatoryModules =  sprintf("SELECT courseTimetable.moduleID, moduleInfo.isMandatory,
                                  moduleInfo.semesterNo, moduleClasses.classSemesterNo,  moduleClasses.startTime, moduleClasses.duration,
                                  moduleClasses.weekNo, moduleClasses.location, moduleClasses.className
                                  FROM courseTimetable
                                  LEFT JOIN moduleInfo ON courseTimetable.moduleID=moduleInfo.moduleID
                                  LEFT JOIN moduleClasses on courseTimetable.moduleID=moduleClasses.moduleID
                                  WHERE courseTimetable.courseID='%s' AND courseTimetable.schoolYear=%s", mysqli_real_escape_string($conn, $courseID), mysqli_real_escape_string($conn, $schoolYear));


    $resultFindMandatoryModules = mysqli_query($conn, $sqlFindMandatoryModules);

    // 2D arrays which store: (moduleID, semesterNo, start time of lec, duration of it, what weekno the lec is on, the location,
    // and the class name which will be the output to the user of what it is)
    $mandatoryModulesArray  = array();

    if (mysqli_num_rows($resultFindMandatoryModules) > 0) {
      while($row = $resultFindMandatoryModules->fetch_assoc()) {

        if ($row['isMandatory'] == 1) {
          array_push($mandatoryModulesArray, array($row['moduleID'], $row['semesterNo'],
                                $row['startTime'],
                                  $row['duration'], $row['weekNo'], $row['location'], $row['className'], $row['classSemesterNo']));
        }

      }
    } else {
    echo "0 results from find mandatory modules";
    }

    // Need to find what optional modules the user take by using INNER JOIN
    $sqlUserOptionalModules = "SELECT moduleInfo.moduleID
                               FROM moduleInfo
                               INNER JOIN modulesEnrolled
                               ON moduleInfo.moduleID=modulesEnrolled.moduleID
                               WHERE moduleInfo.isMandatory=0 AND modulesEnrolled.userID='" . $userID . "'";

    // Store the optionals the user takes
    $userOptionalModulesArray  = array();

    $resultUserOptionalModules = mysqli_query($conn, $sqlUserOptionalModules);

    if (mysqli_num_rows($resultUserOptionalModules) > 0) {
      while($row = $resultUserOptionalModules->fetch_assoc()) {

          array_push($userOptionalModulesArray, $row['moduleID']);

      }
    } else {
      echo "0 results from find optional modules";
    }

    // Find out details of all the optionals the user takes
    for ($index = 0; $index < count($userOptionalModulesArray); $index++) {
      $moduleID = $userOptionalModulesArray[$index];
      $sqlOptionalDetailsModules =  "SELECT moduleInfo.semesterNo, moduleClasses.classSemesterNo,  moduleClasses.startTime, moduleClasses.duration,
                                     moduleClasses.weekNo, moduleClasses.location, moduleClasses.className
                                     FROM moduleClasses
                                     INNER JOIN moduleInfo
                                     ON moduleClasses.moduleID=moduleInfo.moduleID
                                     WHERE moduleInfo.moduleID='" . $moduleID . "'";
      $resultOptionalDetailsModules = mysqli_query($conn, $sqlOptionalDetailsModules);



      if (mysqli_num_rows($resultOptionalDetailsModules) > 0) {
        while($row = $resultOptionalDetailsModules->fetch_assoc()) {

          array_push($mandatoryModulesArray, array($moduleID, $row['semesterNo'], $row['startTime'],
                                              $row['duration'], $row['weekNo'], $row['location'], $row['className'], $row['classSemesterNo']));

        }
      } else {
        echo "0 results from optional details modules";
      }
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


    // copied code fro get students modules php so we can get array easier

    $moduleStudyHoursArray  = array();
    // Need to find what optional modules the user take by using INNER JOIN
     $sqlUserOptionalModulesStudyHours = sprintf("SELECT algorithm1Results.moduleID, moduleInfo.semesterNo, algorithm1Results.hoursToStudy
                                                  FROM algorithm1Results
                                                  INNER JOIN moduleInfo ON algorithm1Results.moduleID=moduleInfo.moduleID
                                                  WHERE algorithm1Results.userID='%s'", $userID);



    $resultUserOptionalModulesStudyHours = mysqli_query($conn, $sqlUserOptionalModulesStudyHours);

    if (mysqli_num_rows($resultUserOptionalModulesStudyHours) > 0) {
      while($row = $resultUserOptionalModulesStudyHours->fetch_assoc()) {

          array_push($moduleStudyHoursArray,  array($row['moduleID'], $row['semesterNo'],
                                $row['hoursToStudy']));

      }
    } else {
      echo "0 results from find optional modules";
    }

    $sqlSelectCurrentWeekNo = sprintf("SELECT currentWeek
                                       FROM registeredUsers
                                       WHERE userID='%s'", mysqli_real_escape_string($conn, $userID));

    $resultSelectCurrentWeekNo = mysqli_query($conn, $sqlSelectCurrentWeekNo);

    $currentWeek;

    if (mysqli_num_rows($resultSelectCurrentWeekNo) > 0) {
      while($row = $resultSelectCurrentWeekNo->fetch_assoc()) {
        $currentWeek = $row['currentWeek'];

      }
    } else {
    echo "0 results from find current week no";
    }



    $conn->close();
  ?>


<script type="text/javascript">
  currentWeek = <?php echo $currentWeek; ?>;
  getWeekDetails();
  moduleArray = <?php echo json_encode($moduleStudyHoursArray); ?>;
  setModuleColours();
  placeBars();

   var jArray =<?php echo json_encode($mandatoryModulesArray); ?>;
   extractClasses();
   var jArray2 =<?php echo json_encode($userActivitiesArray); ?>;
   extractActivities();
   $("#timetableMeat").scrollTop(8*gridHeight);
   //shit to see if they have the quesstionaire done
   //sql shit

  </script>
