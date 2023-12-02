<?php

 
  $default = 12;

  $a;


  echo isset($a) ? $a : $default;


  echo PHP_EOL;


  $result = $a ?? $default;

  echo $result;

  ?>




