<html>
<head>
<title>Pass JS array to PHP.</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>

<body>
	<h3>Pass JavaScript array into PHP.</h3>
	<form id="myForm" action="<?php echo base_url('admin/js2php_proc'); ?>" method="post"> 
		<input type="hidden" id="str" name="str" value="" /> 
		<input type="submit" id="btn" name="submit" value="Submit" />
 	</form>
 	
	<span id="result"></span> 	
 	
	<script>
		var jsarray = new Array();
		jsarray[0] = "Saab";
		jsarray[1] = "Volvo";
		jsarray[2] = "BMW";		 
	
		$(document).ready(function(){
			$("#btn").click( function() {
				$.post( $("#myForm").attr("action"),
					 $('#str').val(JSON.stringify(jsarray)),  
			         //$("#myForm :input").serializeArray(), 
			         function(info){ $("#result").html(info); 
				});
			});
			 
			$("#myForm").submit( function() {
				return false;	
			});
			
		});
	</script>

<?php


//Capture data array from AJAX and process it...
	function js2php_proc() {
		$str = json_decode($_POST['str'], true); 
		echo json_encode($str);
	}

?>
	
</body>
</html>

