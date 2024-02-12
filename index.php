<?php

// Calculator

$a = 12;
$b = 6;

addition($a, $b);
subtraction($a, $b);
multiply($a, $b);
division($a, $b);

// Addition

function addition($a, $b) {

    echo 'Addtion: '.$a + $b .'<br />';

}


//Subtraction

function subtraction($a, $b) {

    echo 'Substraction: '.$a - $b.'<br />';

}

//Multiplication

function multiply($a, $b) {

    echo 'Multiply: '.$a * $b.'<br />';

}

//Division

function division($a, $b){

    echo 'Division: '.$a / $b.'<br />';

}

?>

