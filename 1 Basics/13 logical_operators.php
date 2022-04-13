<?php
    $age = 20;

    /* Logical And Operator */
    if($age >= 18 && $age <= 21){
    echo "You are eligible.<br>";
    }
    echo "Here is other statement";

    /* Logical And Operator*/
    if($age >= 18 and $age <= 21){
    echo "You are eligible.<br>";
    }
    echo "Here is other statement";

    /* Logical Or Operator*/
    if($age >= 18 || $age <= 21){
    echo "You are eligible.<br>";
    }

    /* Logical Not Operator*/
    if(!($age >= 18)){
    echo "You are eligible.<br>";
    }

    /* Logical xor Operator
    * Both condition cannot be true or false
    * Either one can be true
    */
    if($age >= 18 xor $age <= 21){
    echo "You are eligible.<br>";
    }
?>