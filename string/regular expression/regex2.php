<?php
$pattern = '/\.[a-z]{2,6}$/'; // akhane dot ar pore any lowercase letter 2 thek suru kore 6 ta porjonto thakle match dekhabe
$string = "example.abcd";
if (preg_match($pattern, $string)) {
    echo "Match found!";
} else {
    echo "No match found.";
}
?>