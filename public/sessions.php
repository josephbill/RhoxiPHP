<?php
//starting a session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
</head>
<body>
<!-- creating a session -->
<?php
$_SESSION['favColor'] = "red";
$_SESSION['favName'] = "Joseph";
echo "sessions set";
?>

</body>
</html>