<?php
  //constant dedined with define();
  //constant variable start with character or _ not $
  //constant variable can case sensitive or insensitive
  //dedine(name, value, case_insensitive);

  //case_sensitive
  // define("GREETING", "Hello PHP, nice to meet you");
  // echo(GREETING);
  // echo'<br>';

  //case_insensitive
  define("GREETING", "Welcome to W3Schools.com!", true);
  echo GREETING;
  echo '<br>';

  //constant array
  define("car", [
    "BMW", "AUDI", "FARARI"
  ]);
  var_dump(car[1]);
?>