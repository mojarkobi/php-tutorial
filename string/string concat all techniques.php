<?php


   $sentence = "Do You Know Better";

   $line = substr($sentence,0,12). "English ".substr($sentence,12);

   echo $line ."\n";

   echo "this example using strpos() and substr() \n";

   $find_from_word_first_pos = strpos($line,'English');
   $find_to_word_first_pos = strpos($line,'Better'); 

   $final_sentece = substr($line, 0, $find_from_word_first_pos ). "Bangla ". substr($line, $find_to_word_first_pos ) ." And Speak Confidently";



   echo $final_sentece;


   // substr function ti kono sentece theke index onujayi string extract kore ante pare
   // abar  strpos() function ti holo kono word ar first position index dei
   //  strpos($line,'English'); ei code diye $line variable theke 'English' word ti khuje ber kore result hisebe index number dibe
   // substr($line, 0, $find_from_word_first_pos ) ei statement tite 0 holo starting index


   echo "\n \n";
   $sentence2 = "I am a Student of HSC first Year";

   $line2 = strpos($sentence2,'HSC');

   $result1 = substr($sentence2, 0, $line2);

   $result2 = substr($sentence2, 3, $line2); // akhane 3 lekha mane starting position 3 ti character por theke start korbe and 
   // last word of theke shift hoye hsc porjonto extruct hoye jabe

   echo "this result from result1 \n ";
   echo $result1;

   echo "\n\nthis result from result2 \n";
   echo $result2;

