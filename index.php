<?php
//write php
// $x = 5;
// $y = 10;

// echo $x + $y;

$z = 5;
echo $z++;

function arithmeticOperators (){
	$x = 5;
    $y = 10;
    $x = $y;
    $sum = $x + $y;
    $diff = $x - $y;
    $multi = $x  * $y;
    $div = $x/$y;
    $module = $x % $y;
    $expo = $x ** $y;

    echo "sum is " . $sum . "diff is " . $diff . "multi is " . $multi . "div is " . $div
    . "modulus is " . $module . "expone is " . $expo;
}

arithmeticOperators();

 
?>