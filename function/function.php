<?php

/**
 * Determine the argument is even or odd
 */
function evenOrOdd($n)
{ //here, $n parameter
    if ($n % 2 == 0) {
        return true;
    }
    return false;

    // else{
    //     return false;
    // }
}

/**
 * Must write the meaningful function name
 * isEven()
 */

function isEven($n)
{ //here, $n parameter
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

/**
 * Must write the meaningful function name
 */

function isOdd($n)
{ //here, $n parameter
    if ($n % 2 == 0) {
        return false;
    }
    return true;
}

/**
 * Paremeter type check
 * isFactorial()
 */

function isFactorial(int $a)
{
    $result = 1;
    for ($i = $a; $i > 1; $i--) {
        $result *= $i;
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        // var_dump($result);
        // echo "</br>";
    }
    //echo __FILE__ . ' : ' . __LINE__;
    return $result;
}

/**
 * pass the deafult value of a function
 * Set default parameter value
 * serveFood() function
 */

function serveFood($foodType="coffee",$numberOfItems="2 cup"){
 echo "{$numberOfItems} of {$foodType} has been served";
}


/**
 * Fix the return Type of a Function
 * Set  parameter Type
 * sumNumber() function
 */
function sumNumber(int $x,int $y,int $z){
    $sum=$x+$y+$z;
    return $sum;
}