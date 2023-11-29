

<?php


/*
 Important Note: The label: can be anywhere in the program before or after the Goto label; statement.

 Goto is not a function. It’s just a statement.

 The flow of the program will jump to the statement first: This occurs unconditionally.
 



Syntax:
statement1;
statement2;
if (expression)
goto label1;
statement3;
label1: statement4;
 
*/



  ?>



<?php
$n = 25;
echo "hello";
goto atato_label;


echo "ashik";

atato_label: echo "this is from goto statement";
?>


<?php

$n = 25;
/*

here this goto statement work like infinite loop
*/
  echo "hello";
  ata_label: echo "hi";

 // goto ata_label;   ata comment korchi karon ata jodi comment na kori tahole infinite loop hoye jabe

  echo "ashik";



  


  ?>