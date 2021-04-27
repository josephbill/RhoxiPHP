<?php declare(strict_types=1); // strict requirement

//syntax for a user defined function
function nameOftheFunction(){
	echo "joseph";
}

function addSum(int $x = 10, int $y = 20){

    echo $x + $y;
}

//call a function
echo "<br>";
addSum(4,5);
echo "<br>";
addSum(20,20);
?>