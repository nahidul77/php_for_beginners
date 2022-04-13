<?php
function wow($name) {
    echo "Hello $name";
}

$func = "wow";
$func('Nahidul islam');



/* ---  Anonymous function ----*/
$sayHello = function($name) {
  echo "Hello $name!";
};

$sayHello('Nahidul islam');

?>