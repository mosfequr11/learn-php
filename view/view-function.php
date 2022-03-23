<?php
require_once "../function/function.php";


/**
 * Calculating Factorial Number
 */

$t = 6;
echo "{$t} factorial is" . isFactorial($t);
echo "<hr>";
echo "<br>";


/**
 * Determine the argument is even or odd
 */
// $x=13;
$x = 14;

if (evenOrOdd($x)) {  //here, $x argument
    echo "{$x} is an even number";
} else
    echo "{$x} is an Odd number";

//die("goodbye world");
echo "<hr>";
echo "<br>";



/**
 * Must write the meaningful function name
 * Using isEven Function
 */
$y = 24;
if (isEven($y)) {  //here, $y argument
    echo "{$y} is an even number";
} else
    echo "{$y} is an Odd number";

//die("goodbye world");
echo "<hr>";
echo "<br>";


/**
 * Must write the meaningful function name
 * Using isOdd Function
 */
$z = 36;
if (isOdd($z)) {  //here, $z argument

    // echo "<pre>";
    // print_r($z);
    // echo "</pre>";

    echo "{$z} is an Odd number";
    echo "<br>";
    die("hello world");
} else
    // echo "<br>";
    // echo "<pre>";
    // print_r($z);
    // echo "</pre>";
    // echo "<br>";

    echo "{$z} is an Even number";
echo "<br>";
// die("goodbye world");

echo "<hr>";
echo "<br>";

