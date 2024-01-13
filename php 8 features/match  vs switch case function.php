<?php


$price = 500;

switch($price){
    case "500":
        $result = "value is not matched with it data type strictly\n";
        break;
    case 500:
        $result = "value is match with strictly\n";
}


echo $result;

// here check with match expression

$result2 = match($price){
    "500" => "value is not matched with it data type strictly\n",
    500 => "value is match with strictly\n",
};

echo $result2;
?>

<?php

$age = 18;

echo match($age){
    25,18 => 'age is elegible'
};
?>

