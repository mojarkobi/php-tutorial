<?php

$url = "https://web.ashik.com/";


$pattern2 = "/^(https:\/\/(www\.|\w+\.)?[\w]*\.[\w]*\/[\w]*)$/"; // match url with  www.  or subdomain or only main domain

preg_match($pattern2, $url, $matches);

print_r($matches);

?>
