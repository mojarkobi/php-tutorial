<?php

   $n = 12;


   switch ($n%2){

     case 0:
        echo "this is a even number";
        break;
        echo PHP_EOL;
    default:
        echo "this is a odd number";
        echo PHP_EOL;

   }


   // switch case alternative syntax
   switch($n%2):

     case 0:
        echo "this is a even number";
        break;
        echo PHP_EOL;
        default:
        echo "this is a odd number";
        echo PHP_EOL;

     endswitch;


   // php alternative syntax 
   // we can mix php code with html and 
   // we can close php block multiple time into a single file
   
   switch($n%2):

    case 0:
        ?>

      this is a even number

      <?php
       break;
       echo PHP_EOL;
       default:
       ?>
       this is a odd number

       <?php
       echo PHP_EOL;

    endswitch;
