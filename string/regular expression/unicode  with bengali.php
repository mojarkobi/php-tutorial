<?php

$pattern = '/[\p{Script=Bengali}\p{Z}\p{P}]/u';

$string = "হ্যালো, কেমন 123 আছেন? 123";
if (preg_match($pattern, $string)) {
    echo "Match found!";
} else {
    echo "No match found.";
}


echo "\nthis result from second pattern \n";

$pattern2 = '/^[\p{Script=Bengali}\p{Z}\p{P}]*$/u';

$string = "হ্যালো, কেমন 123 আছেন? 123";
if (preg_match($pattern2, $string)) {
    echo "Match found!";
} else {
    echo "No match found.";
}


/*
   উপরের কোডে \p{Script=Bengali} ‍এটি মানে বাংলা সকল র্বন 
   আবার \p{Z}  মানে স্পেস এলাউ 
   আবার \p{P} মানে বিরামচিহ্ন এলাউ

*/


/*

উপরের কোডে 
    '/[\p{Script=Bengali}\p{Z}\p{P}]/u' মানে বাক্যের মাঝে শুধু ্ প্যার্টানের শর্তগুলি ম্যাচ হলেই হবে।
    আর তার বাহিরে কিছু উল্লেখ থাকলে সমস্যা নাই
    
    কিন্তু '/^[\p{Script=Bengali}\p{Z}\p{P}]*$/u' এর মানে এর ভেতর যা উল্লেখ আছে তার বাহিরে কোন সংখ্যা বা কোন কিছু যা প্যার্টানে উল্লেখ নাই
    তা উল্লেখ থাকলে এটি match দেখাবে না।
   


*/