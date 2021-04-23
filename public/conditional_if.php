<?php
//if statement : this is a conditional statement which only works if the condition is true 
$age = 25;
// if($age >= 18){
//   //code to be executed if the condition is true
// 	echo "you can buy alcohol";
// }

//if else : differs from if in that it will check whether condition is true if not it will run a false block
if ($age >= 18) {
	# code...
	echo "you can buy alcohol<br>";  
} else {
	echo "you are not above the age limit , do you want juice!<br>";
}

$car = "volvo";
//if .. elseif .. else : multiple condition checks 
if ($car == "volvo") {
	# code...
	$x = 5;
	$y = 5;
	echo $x + $y;
} elseif ($car == "bmw") {
	# code...
		echo "right car<br>";

} elseif ($car == "jeep"){
	echo "right car<br>";

} elseif ($car == "benz"){
	echo "right car<br>";

} else  {
    echo "car cannot be found<br>";
}

?>