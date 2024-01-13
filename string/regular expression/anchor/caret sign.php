<?php

$pattern = "/^\w+/";

$string = "the name of our school is *-+.*baira";

$string2 = preg_replace($pattern,"duira", $string); // last baira word ti match kore duira kore felbe

echo $string2;
?>