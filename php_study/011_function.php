<?php declare(strict_types=1);
  function outputMsg(){
    echo("Hello World<br>");
  }
  outputMsg();
  function greeting($name){  //with one argument
    echo("Hello $name<br>");

  }
  greeting("Minn Thit Oo");
  greeting("Aung Khaing Oo");
  greeting("Myo Htut Oo");
  greeting("So Pyay Oo");
  greeting("Si thu Aung");

  //strict keyword

  function addNum(int $a, int $b){
    echo $a + $b;
  }
  //addNum(5, "5 days"); //auto convert string to int but if strict keywork added it give error

  //default argument
  function defArg(int $i = 12){
    echo("$i<br>");
  }
  defArg(40);
  defArg(50);
  defArg();

  //return function

  function sunInt (int $a, int $b){
    $c = $a+ $b;
    return $c;
  }
  echo(sunInt(1,2)."<br>");

  //return type declaration

  function floatRet(float $a, float $b) : float{
    return $a + $b;
  }
  echo(floatRet(12.0, 13.4)."<br>");

  function intRet(float $a, float $b) : int{
    return (int)($a + $b);
  }
  echo(intRet(12.0, 13.4)."<br>");

  //pass by reference
  function passRef(&$ptr){
    return $ptr+= 5;
  }
  $r = 10;
  echo(passRef($r)."<br>");
  echo("$r<br>");

?>