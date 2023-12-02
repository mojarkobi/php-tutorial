php named argument introduce in php 8 

it solve the function call wrong argument passing problem


<?php


  function person_info($name,$age){


    echo "{$name} age is {$age} \n";

  }

  person_info(age:25, name:'ashik');  // here i mention  parameter name so that it give output without showing error only argument position mistake

