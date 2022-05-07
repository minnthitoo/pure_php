<?php

  //index array
  $names = array("Minn Thit Oo", "So Pyay Oo", "Myo Htut Oo", "Aung Khaing Oo", "Si thu Aung");
  echo($names[0].", ".$names[1].", ".$names[2].", ".$names[3]." and ".$names[4]." are the best friends.<br>");
  echo(count($names)."<br>");

  //associative array
  $ages = array("Minn Thit Oo"=>24, "Myo Htut Oo"=>23, "So Pyay Oo"=>25, "Aung Khaing Oo"=>28, "Si Thu Aung"=>23);
  echo $ages["Si Thu Aung"]."<br>";
  foreach($ages as $key => $value){
    echo "Key = ". $key . " Value = ". $value . "<br>";
  }
  //multidimational array
  //name age relationship
  $friends = array(
    array("Minn Thit Oo", 24, false),
    array("Myo Htut Oo", 23, true),
    array("So Pyay Oo", 25, true),
    array("Aung Khaing Oo", 28, true),
    array("Si Thu Aung", 23, false)
  );
  for($row = 0; $row < 4; $row++){
    echo("<p>Name Age Relationship</p>");
    echo("<ul>");
    for($col = 0; $col < 3; $col++){
      echo("<li>".$friends[$row][$col]."</li>");
    }
    echo("</ul>")ဝ;
  }

  //sorting arrays
  //sort() => ascending
  //rsort() => descending
  //asort() => ascending orderd according to the value;
  //ksort() => ascending order according to the key
  //arsort() => descending order according to the value
  //krsort() => descending order according to the valueဝ

?>