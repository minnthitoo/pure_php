<?php
  //String functions 

  $str = "I love PHP. I am learning PHP.";

  //strlen() function output length of string.

  echo strlen($str);

  //str_word_count() function output word count of the string.

  echo '<br>';

  echo str_word_count($str);

  //strrev() function reverse the string.

  echo '<br>';
  echo strrev($str);

  //strpos() function output search string postiion (the first character index) strpos(string, wanted string);

  echo '<br>';
  echo strpos($str, "learning");

  //str_replace() -> replace string str_replace(old sub string, new, full string).

  echo '<br>';
  echo str_replace('learning', 'teaching', $str);

?>