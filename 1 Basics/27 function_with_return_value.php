<?php

//1)
function hello($fname="First",$lname="Last"){
  $v = "$fname $lname";

  return $v;
}

echo hello("Nahidul","islam");


//2)
$name = hello("Nahidul","islam");

echo "Hello $name"; 


//3)
function sum($math,$eng,$sc){
  $s = $math + $eng + $sc;
  return $s;
}

$total = sum(55,65,88);
echo $total;


//4)
function percentage($st){
  $per = $st/3;
  echo $per . "%";
}

percentage($total);

?>