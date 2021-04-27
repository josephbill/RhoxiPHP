<?php
//while loop 
// $x = 1; 

// while ($x <= 5) {
// 	# code...
// 	echo $x; 

// 	//to determine whether loop is finite or infinite
// 	//increment or decrement operator 
// 	$x-- ; //finite loop


// }


//break statement 
for($x = 0; $x < 10; $x++){
	if ($x == 4) {
		# code...
		continue;  //skip the iteration of the condition specified 
	} elseif ($x == 6){
         break; //terminate loop when condition is met 
	}
	echo $x;
}




?>