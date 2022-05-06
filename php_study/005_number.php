<?php
//Number

/*
php has the following function to check intger

is_int();
is_integer();
is_long();

*/

$int = 12;
$float = 12.1;

echo is_int($int);
echo '<br>';
echo is_int($float);

//float 

/*
float has following function to check float

is_float();
is_double();

*/

echo is_float($float);

//infinity

/*
infinity has following function to check infinity

is_finite();
is_infinite();

*/

$inf = 12e1222;

echo is_infinite($inf);

//NaN

/*
NaN is used for inpossible mathematical operation.
is_nan() function check is nan;
*/

$x = acos(8);
var_dump($x);

//Numeric String

/*
is_numeric() function check is numeric string.
*/

$number = 12345;
$numStr = '12345';
var_dump(is_numeric($number));
var_dump($numStr);

$res = $number + "123.2";
var_dump($res);

//casting string, float to integers

$casfloat = 123.3333;
$casStr = "124";
$casint = (int)$casfloat;
$cassti = (int)$casStr;
echo $casint;
echo $cassti;


?>