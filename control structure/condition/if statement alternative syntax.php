<?php

  $first_employe = "ashik";
  $second_employe = "hridoy";
  $thir_employe = "sohel";

  if($first_employe == 'ashik'){

    echo "The First Worker: " . $first_employe;
    echo PHP_EOL;
  }
  elseif($first_employe == 'hridoy'){

    echo "The first worker: ".$first_employe;
    echo PHP_EOL;

  }

  // php alternative if statement syntax

  if($first_employe == 'ashik'):

    echo "The First Worker: " . $first_employe;
    echo PHP_EOL;
  elseif ($first_employe == 'akash'):

    echo "The First Worker: " . $first_employe;
    echo PHP_EOL;
  
  endif;