<?php
$pattern = "/@\w+\.[a-zA-Z]+$/";  // akhane @ ar pore atleast 1 or more word tarpor dot tarpor one or more word 
// but jekono akta word ar por jodi symbol ba digit ja e thakuk ata match dekhabe
// arekta kotha \.[a-zA-Z]+$ ai part diye bujano holo dot ar por single or more character tarpor '$' mane holo 
// 

$pattern2 = '/^\w*@(\w+\.\w+)$/';


$email = "example@email.com";

if (preg_match($pattern, $email)) {
    echo "Match found!";
} else {
    echo "No match found.";
}


?>