<?php

/**
 * Determine the argument is even or odd
 */
function evenOrOdd($n)
{ //here, $n paramater
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
{ //here, $n paramater
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

/**
 * Must write the meaningful function name
 */

function isOdd($n)
{ //here, $n paramater
    if ($n % 2 == 0) {
        return false;
    }
    return true;
}

/**
 * Must write the meaningful function name
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
    echo __FILE__ . ' : ' . __LINE__;
    return $result;
}
