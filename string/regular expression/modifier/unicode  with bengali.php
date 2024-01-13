<?php

$pattern = '/[\p{Bengali}\p{Z}\p{P}]/u';

$string = "হ্যালো, কেমন১২৩ 123.& আছেন?";
if (preg_match_all($pattern, $string, $matches)) {
    print_r($matches);
} else {
    echo "No match found.";
}




/*
   উপরের কোডে \p{Bengali} ‍এটি মানে বাংলা সকল র্বন 
   আবার \p{Z}  মানে স্পেস এলাউ 
   আবার \p{P} মানে বিরামচিহ্ন এলাউ



উপরে ইংরেজি সংখ্যা 123 বাদে বাকি বাংলা বর্ন  এবং ১২৩ সংখ্যা  এবং ডট. কমা, এবং এমপারসেন্ড  &   ম্যাচ দেখাচ্ছে
*/

?>

<?php
$pattern = '/[\p{Bengali}\p{Z}&&[^\d]]/u';
$string = "হ্যালো, কেমন১২৩  123 আছেন? 123";

// Using preg_match_all to find matches
preg_match_all($pattern, $string, $matches);

// Output the matches
print_r($matches[0]);


//  উপরের \p{Bengali} দিয়ে সকল বর্ন এবং বাংলা সংখ্যা ম্যাচ করবে কিন্তু সংখ্যা ব্যাতিত শুধু বর্ন ম্যাচ করা যাবেনা

// এটি করতে ইউনিকোড কারেক্টার রেন্জ ব্যবহার করতে হবে নিচে এটি দেখানো হলো
?>




<?php
$pattern = '/[\x{0980}-\x{09E3}]/u';
$string = "হ্যালো, কেমন১২৩  123 আছেন? 123";

// Using preg_match_all to find matches
preg_match_all($pattern, $string, $matches);

// Output the matches
print_r($matches[0]);

/*
The \x is a way to represent hexadecimal values in a regular expression pattern. In PHP, when dealing with Unicode characters, you can use \x followed by the hexadecimal Unicode code point to specify a character range.

For example, in the regular expression pattern '/[\x{0980}-\x{09E3}]/u':

\x{0980} represents the Unicode code point U+0980.
\x{09E3} represents the Unicode code point U+09E3.
These Unicode code points define the range of Bengali characters that the regular expression is intended to match
*/

?>


