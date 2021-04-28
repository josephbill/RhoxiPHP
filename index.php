<?php
//this is how we define a variable 
$firstName;
//intializing the variable 
$firstName = "43";

//array : single variable holding multiple items
//volvo, bmw. jeep 
$volvo = "volvo";
$bmw = "bmw";
$jeep = "jeep";


//array called cars
$cars = array(4,"bmw","jeep",4.5);
$cars = array(3,"benz","toyota");
echo $cars[0] . $cars[1] . $cars[2] . "<br>";

//define a constant
define("car","jeep");


//to write a custom function
function nameOfTheFunction(){
	echo "Joseph Mbugua";
}


nameOfTheFunction();



?>