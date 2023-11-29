<?php

/*
 To match only Bengali characters, you can use the Unicode script property for Bengali,
 which is represented by \p{Bengali}. Here's an example:
*/

$pattern = '/\p{Bengali}/u';

$string = "আমার সোনার বাংলা";
if (preg_match($pattern, $string)) {
    echo "Match found!";
} else {
    echo "No match found.";
}



/*
To match Bengali alphabet characters and spaces only (excluding punctuation), 
you can use the Unicode property for the Bengali script along with the whitespace character class. 
The Unicode property for the Bengali script is \p{Script=Bengali}, and the whitespace character class is \s. Here's how you can construct the regular expression:
*/

$pattern = '/^[\p{Script=Bengali}\s]+$/u';

$string = "হেলো বাংলা";
if (preg_match($pattern, $string)) {
    echo "Match found!";
} else {
    echo "No match found.";
}

/*

Explanation of the pattern:

^: Anchors the pattern to the start of the string.
[\p{Script=Bengali}\s]+: Matches one or more characters that are either Bengali script characters or whitespace characters.
$: Anchors the pattern to the end of the string.
u: This is the "UTF-8 mode" modifier in PHP, which is necessary when working with Unicode characters.

*/

