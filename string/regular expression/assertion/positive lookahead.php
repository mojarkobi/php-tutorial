<?php

$pattern = '/the(?=\sname)/';

$str = "the name of our school is the name baira";

preg_match_all($pattern,$str,$matches);  // output 'the' 'the'

print_r($matches);
?>

উপরের কোডে প্যারেনথিসিস() এর ভেতরে ?= মানে হলো positive lookahead অর্থাৎ  এই চিহ্নের পরে যে প্যাটার্ন থাকবে 
তা খুজে বের করে এটার সামনের ওয়ার্ড টা কে আউটপুট হিসেবে দেখাবে
যেমন উপরে the(?=\sname) মানে হলো স্পেস সহ name ওয়ার্ড টা খুজে বের করবে তারপর স্পেস সহ name ওয়ার্ড টার সামনের the শব্দটাকে আউটপুট দেখাবে
