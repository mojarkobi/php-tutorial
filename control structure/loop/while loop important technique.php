<?php

  $n = 0;

  while($n<5){

    echo $n . "\n";
    
    $n++; // here the increment part
  }




  $n = 0;

  echo "---------------------\n";


  // here $n++<5 is first evaulate less than operator then post increment operator 
  while($n++<5){

    echo $n . "\n";

  }


  $n = 0;

  echo "---------------------\n";

  while(++$n<5){

    echo $n . "\n";

  }



  /*


  the above while loop 

  $n++ means $n = $n;  $n = $n + 1;

  ++$n means  n = n+1;

  */