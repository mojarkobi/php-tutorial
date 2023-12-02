<?php

  // recursive function main piller 

  // 1.function exit korar condition 2.function exit korar jonno kono variable ba value update kora jate exit korar condition ta kaj korte pare
  
  // r function exit howar jonno je condition ta likha hobe seta sadaronoto function start korar surur dike likha

  // r function exit korar jonno condition likha ai karone joruri je ta nahole ati infinite loop hoye jabe


  
  // here simple example of recursive function


  function simple_list($counter,$end, $stepping = 1){

    if($counter >= $end ){

        return;
    }
    

    echo "$counter \n";

    $counter += $stepping;


    simple_list($counter,$end,$stepping);

  }


  simple_list(2,40,5);


  echo "-------------------------\n";

//   function fibonacci ($old,$new,$start,$end){

//     if($start > $end){
//         return;
//     }

//     $start++;
//     echo $old. ", ";

//     $_tmp = $old + $new;

//     $new = $old;

//     $old = $_tmp;

//     fibonacci ($old,$new,$start,$end);

//   }

//   fibonacci (0,1,1,15);


function fibonacci ($old,$new,$end){

    static $start;  // static variable ta protibar function call a ager function call ar value ta store kore rakhe

    $start = $start ?? 0;


    if($start > $end){
        return;
    }

    $start++;
    echo $old. ", ";

    $_tmp = $old + $new;

    $new = $old;

    $old = $_tmp;

    fibonacci ($old,$new,$end);

  }

  fibonacci (0,1,10);


  /* upore static keyword use kore static variable declare kora holo 
  ar subida holo jeheto recursive function a jokhon call kora hoy tokhon jeheto  $start variable ti function parameter hisebe call and receive kora hoyni

  so jokhon fibonacci ($old,$new,$end); ata call hobe function ar vitor theke 
  tokhon kintu  function ta jodi `$start = $start ?? 0;` ai line ta sorasori likhtam tahole kintu ata porerbar function call a bujto na 
  ata ager je value koto chilo karon ata call korar somoy to $start argument pass koreni 


  ai karone static $start variable declare kora holo jate ati ager barer variable ar man ta store rakhte pare



  */