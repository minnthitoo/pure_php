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
?>