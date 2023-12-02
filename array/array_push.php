<?php

 $fruits = ["mango","banana","apple"];

 array_push($fruits,'amra','kola');
 print_r($fruits);

 $fruits2 = ['jackfruit','pineaple'];

 array_push($fruits, ...$fruits2);  // jodi ...$fruits2 use korchi karon ati holo splat operator
 
 // ati $fruits array theke element guli akta akta kore extract kore $fruits array te push korbe
 
 // kintu jodi sorasori   $fruits2 arokom use kortam tahole  $fruits2 sumporno array ta akta singe array element hisebe 
 // $fruits arrray te push hoye jeto 

 print_r($fruits);

