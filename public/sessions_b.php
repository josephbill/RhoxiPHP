<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h4>Shared page</h4>
    <!-- retrieve sessions using the session name -->
    <?php
       //use the isset to first confirm if a session is present
      if (isset($_SESSION['favColors'])) {
      	# code...
      	   echo "Favourite color is " . $_SESSION['favColor'] . " fav name is " . $_SESSION['favName'];
      	   session_unset();
      	   session_destroy();
      } else {
      	echo "session does not exist";
      }

    ?>
</body>
</html>