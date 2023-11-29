<?php

  $n = 10;

  //$result = ($n % 2 == 0) ? "a" : ($n == 11) ? "b" : "c";
  // uporer code ta error karon php te ternary operator ar properly nested kora hoyni
  // jemon php uporer code ta ke (($n % 2 == 0) ? "a" : ($n == 11)) ? "b" : "c";  arokom kore evaluate korbe
  // tai ati ("a") ? "b" : "c" arokom hobe
  // sejonno pore ati "b" show korbe jeta amra chaini

  $result = ($n % 2 == 0) ? "a" : (($n == 11) ? "b" : "c");

  //uporer 2nd example a "a" : er por () diye sob ta ke group kore akta single code banai felchi tai ati perfectly kaj korbe


  echo $result;

  ?>
  