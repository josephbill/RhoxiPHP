<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
</head>
<body>


	<?php
//collecting form data 
//declare variables to contain the input info
$username = "";
$idNumber = "";
$office = "" ;
$usernameErr = $idNumberErr = $officeErr = "";

//listen for an event
//to basically check if an event has happened we use the php in built method called isset()
if (isset($_POST['save'])) { //checked if btn has been clicked 
	# code...
	//pick up the input 
	//check if the inputs are empty or not 
	//to check if sth is empty we can use the in built function empty()
	if (empty($_POST['username'])) {
		# code...
		$usernameErr = "The username is empty";
	} else {
        $username = test_input($_POST['username']);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
        $usernameErr = "Only letters and white space allowed";
        }
	}

	if (empty($_POST['idNo'])) {
		# code...
		$idNumberErr = "id number is empty";
	} else {
		$idNumber = test_input($_POST['idNo']);
	}


 if (empty($_POST['office'])) {
		# code...
 	$officeErr = "Office is empty";
	} else {
		$office = test_input($_POST['office']);
	}

	if (empty($usernameErr) && empty($emailErr) && empty($officeErr)) {
		# code...
			echo "This person: " . $username . " of ID number: " . $idNumber . " is visiting office: " . $office;

	} else {
		echo "data validation is not secured";
	}


}


function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}






?>



   <div class="jumbotron" style="margin-top: 10px;">
   	   <div class="container">
   	   	   <div class="row">
   	   	   	    <div class="col">
   	   	   	    	<h3>Welcome to RX Building</h3>
   	   	   	    	<hr>
   	   	   	    	<form action="forms.php" method="post">
   	   	   	    		<div class="form-group">
   	   	   	    			<input type="text" name="username" class="form-control" placeholder="Enter Full Name"  >
   	   	   	    			<p><?php echo $usernameErr; ?></p>
   	   	   	    		</div>
   	   	   	    		<br>
   	   	   	    		<div>
   	   	   	    			<input type="text" name="idNo" class="form-control" placeholder="Enter ID number" >
   	   	   	    			<p><?php echo $idNumberErr; ?></p>

   	   	   	    		</div>
   	   	   	    		   	   	   	    		<br>

   	   	   	    		<div>
   	   	   	    			<input type="text" name="office" class="form-control" placeholder="Enter Office to Visit">
   	   	   	    			<p><?php echo $officeErr; ?></p>

   	   	   	    		</div>
   	   	   	    		   	   	   	    		<br>

   	   	   	    		<div>
   	   	   	    			<input type="submit" name="save" class="btn btn-primary btn-block" value="Submit Data">
   	   	   	    			<br>
   	   	   	    			   	   	   	    			<br>

   	   	   	    			<input type="reset" name="reset" class="btn btn-danger btn-block" value="Reset Data">
   	   	   	    		</div>
   	   	   	    	</form>
   	   	   	    </div>
   	   	   </div>
   	   </div>

   </div>




<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript"></script>

</body>
</html>






















