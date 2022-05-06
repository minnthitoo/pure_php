<?php
  $x = 12; //global variable
  // function getInt(){
  //   echo $x; //error
  // }
  // echo $x; //access global variable from outside function
  /*
  if you want to get global from function body use global keyword
  */
  function getInt(){
    global $x; //to use global keyword 
    echo $x;
  }
  //global viriables are stored in ($GLOBALS) arrays
  $num1 = 10;
  $num2 = 20;
  $num3 = 30;
  echo $GLOBALS['num1'].'<br>';
  echo $GLOBALS['num2'].'<br>';
  echo $GLOBALS['num3'].'<br>';
?>