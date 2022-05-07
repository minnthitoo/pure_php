<?php
  //do while loop
  $x = 1;
  echo("do while loop<br>");
  do{
    echo("$x<br>");
    $x++;
  }while($x < 11);

  //while loop
  echo("while loop<br>");
  $y = 1;
  while($y < 11){
    echo("$y<br>");
    $y++;
  }

  //for loop
  echo("for loop<br>");
  for($i = 1; $i < 11; $i++){
    echo("$i<br>");
  }

  //foreach loop
  echo("<br>foreach loop<br><br>");
  $names = ["minn thitoo", "myo htut oo", "aung khaing oo", "so pyay oo", "si thu aung"];
  foreach($names as $name){
    echo("$name<br>");
  }

  //break and continue
  echo("break<br>");
  for($i = 1; $i < 10; $i++){
    if($i == 5){
      break;
    }
    echo("$i<br>");
  }

  echo("continue<br>");

  for($i = 1; $i < 10; $i++){
    if($i == 5){
      continue;
    }
    echo("$i<br>");
  }
?>