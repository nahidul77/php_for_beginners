<?php
function helloo($name){
  echo "Hello $name.<br>";
}

hello("Nahidul Islam"); /* ----------- also show error */


/* TWO Argument : */

function hello($fname,$lname){
  echo "Hello $fname $lname.<br>";
}

hello("Yahoo","Baba");

hello("Bill","Gates");



/* Default Value : */

function hellooo($fname="First",$lname="Name"){
  echo "Hello $fname $lname.<br>";
}


/*  SUM function */

function sum($a,$b){
  echo $a + $b;
}

sum(10,20.50);


/* Passing with Variables */

$one = 10;
$two = 20.50;
sum($one,$two);
?>