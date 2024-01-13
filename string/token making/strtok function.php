<?php
// generate token by split string and it keep tracking of token

$str = "Hello dear friends please visit my, site";
$token = strtok($str, " "); // first parameter is string 2nd is token delimiter 
echo $token."*";
$token = strtok(" "); // now need only mention token delimiter not string parameter
echo $token."*";
$token = strtok(" "); 
echo $token."*";
$token = strtok(","); 
echo $token."*";
//echo $token;
//echo $token;

/*
উপরে যতবার জায়গায় * আছে বুঝতে হবে ঐ বারবর ই কোপ টা পড়েছে
*/
?>

