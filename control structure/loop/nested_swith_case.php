<?php

 $n = 10;

 $r = $n % 2;

 // akhane case 0 hole buja jabe $n number ti jor sonkha . r case 0 match na korar mane ati odd ba bejor number
 switch($r){

    case 0:
        switch($n){

            case $n > 0:
                echo "this is positive even number";
                break;
            case $n < 0:
                echo "this is negative even number";
                break;
        }

    break;

    default:
      echo "this is odd number";

 }

// this switch case techniques use enter true so that it can always run and check all case
// এখানে এটিতে switch(true) দেওয়ার কারনে loop টি চলবেই আর সেই সাথে  সব case চেক করবে
// এই কৌশল ব্যবহার করে অনেক শর্ত চেক করা যায়

   switch(true){

    case ($n > 0 && $r == 0):
        echo "\n this result from second switch case \n";
        echo "this is positive even number";
                break;
    case ($n < 0 && $r == 0):
        echo "\n this result from second switch case \n";
        echo "this is negative even number";
        break;
    default:
    echo "\n this result from second switch case \n";
     echo "this is odd number";


   }

