<?php
/*
  php support the following data types
  string
  ingeger
  float
  boolean
  array
  object
  NULL
  Resource
*/

//String -> sequence of word you can use single quote ' or double quote ".

$single = 'Hello Wrold';
$string = "Hello World";

//Integer 
/*
  An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

  Rules for integers:

  An integer must have at least one digit
  An integer must not have a decimal point
  An integer can be either positive or negative
  Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
  you can see datatype with var_dump();
*/
$int = 123;
var_dump($int);

//Float

$float = 12.123;

//Boolean

$boolt = true;
$boolf = false;

//Array

$arr = array("BMW", "TOYOTA", "AUDI", "FARRARI");
$arrtwo = [1, 2, 3, 4, 5];
var_dump($arr);
var_dump($arrtwo);


?>