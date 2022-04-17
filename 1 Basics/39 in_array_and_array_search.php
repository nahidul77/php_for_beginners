<?php
/**
 * in_array(mixed $needle, array $haystack, bool $strict = false): bool
 */

$os = array("Mac", "NT", "Irix", "Linux");

if (in_array("Irix", $os)) { //true
    echo "Got Irix";
}

/**
 * If needle is a string, the comparison is done in a case-sensitive manner.
 */
if (in_array("mac", $os)) { //false
    echo "Got mac";
}

$food = array('orange', 'banana', 'apple', 'grapes', '55');


/**
 * If the third parameter strict is set to true then the in_array() function will also check the types of the needle in the haystack.
 *  ---- strict mode------
 */

echo in_array(55, $food, true); //false 


/* --------Multipledimensional Associative Array------------- */
$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)){}


/* ----------Array Search------------- */
echo array_search("apple", $food);



/* -----------Associative Array-------------- */
$food = array('a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'grapes');

echo array_search("apple", $food);

echo in_array("apple", $food);

?>