<?php
// generate token by split string and it keep tracking of token

$str = "Hello dear friends please ,visit my, sitefffff-kkk";
$token = strtok($str, " "); // first parameter is string 2nd is token delimiter 
echo $token."*";
$token = strtok(" "); // now need only mention token delimiter not string parameter
echo $token."*";
$token = strtok(" "); 
echo $token."*";
$token = strtok(", s"); // output Hello*dear*friends*please * কিন্তু ডেলিমিটারে স্পেস সহ  strtok(" ,") উল্লেখ করলে 
// এটি Hello*dear*friends*please* এরকম দেখাতো মানে স্পেসসহ কমা টার বারবর কোপ দিয়ে এটার বরাবর * আসতো
echo $token."*";
$token = strtok(" "); 
echo $token."*";

$token = strtok(" "); 
echo $token."*";

/*
উপরে যতবার জায়গায় * আছে বুঝতে হবে ঐ বারবর ই কোপ টা পড়েছে
*/
?>