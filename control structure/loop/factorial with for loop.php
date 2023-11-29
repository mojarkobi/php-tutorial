<?php

$string ='';
  for($i=6,$j=1; $i>0; $i-=1):
    
    
    $j *= $i;
    $string .= "$i*" ;

    if($i == 1){
        echo $j;
        echo PHP_EOL;

        echo (substr($string,0,strlen($string)-1)); // here last character remove from this string wich is *
    }

  endfor;

echo "\n--------------------\n";

$string = "";
  for($i=6,$j=1; $i>0; $i-=1):
    
    
    $j *= $i;
    if($i == 1){

      $string .= "$i" ;
      continue;
    }
    $string .= "$i*" ;

    if($i == 1){
        echo $j;
        echo PHP_EOL;

        // here last character remove from this string wich is *
    }

  endfor;

  echo $string; 

