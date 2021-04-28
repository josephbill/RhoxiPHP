<?php
session_start();
?>
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
$imageUploaded = "";
$target_file = "";
$target_dir = "";
$usernameErr = $idNumberErr = $officeErr = "";

//checking if file is uploaded (demo wise )
$uploadOk = 1;
//converting file extension to lowercase 
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//listen for an event
//to basically check if an event has happened we use the php in built method called isset()
if (isset($_POST['save'])) { //checked if btn has been clicked 
//upload variables 
//directory to store uploads
$target_dir = "../uploads/";
//specify the path of the upload 
$target_file = $target_dir . basename($_FILES['imageUpload']['name']);
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

  $imageUploaded = $_FILES['imageUpload']['tmp_name'];

	if (empty($usernameErr) && empty($emailErr) && empty($officeErr)) {
		# code...
    if (move_uploaded_file($imageUploaded, $target_file) == TRUE) {
      # code...
      echo "This person: " . $username . " of ID number: " . $idNumber . " is visiting office: " . $office . " also image uploaded";
    } else {

			echo "image has not been uploaded";

	} 
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
   <?php
    if (isset($_SESSION['favColor'])) {
      # code...
         echo "Favourite color is " . $_SESSION['favColor'] . " fav name is " . $_SESSION['favName'];
       session_unset();
           session_destroy();
    } else {

      echo "";
    }
    ?>                  <br>
   	   	   	    	<h3>Welcome to RX Building</h3>
   	   	   	    	<hr>
   	   	   	    	<form action="forms.php" method="post" enctype="multipart/form-data">
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
                    <div class="form-group"> 
                      <label>Upload File</label>
                      <input type="file" name="imageUpload" class="form-control" multiple="">
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






















