<?php
  //if else statement 
  $x = 12;
  if($x == 19){
    echo("Hello 19");
  }elseif($x == 10){
    echo("Hello 10");
  }else{
    echo("Hello default");
  }
  //swith statement
  switch($x){
    case 1:echo("Hello 1");
    break;
    case 2:echo("Hello 2");
    break;
    case 3:echo("Hello 3");
    break;
    case 12:echo("Hello 12");
    break;
    default:echo("Hello default");
  }
?>