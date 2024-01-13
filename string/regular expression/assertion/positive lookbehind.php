# positive lookbehind

```php

<?php

$pattern = '/(?<=free\s)course/';

$str = "free course
paid course
enroll course
free course
";

$matches = preg_replace($pattern,"paichi",$str);  

print_r($matches);
?>
```

উপরের কোডে প্যারেনথিসিস() এর ভেতরে ?<= মানে হলো positive lookbehind অর্থাৎ  এই চিহ্নের পরে যে প্যাটার্ন থাকবে 
তা খুজে বের করে এটার পরের ওয়ার্ড টা কে আউটপুট হিসেবে দেখাবে
যেমন উপরে (?<=free\s)course মানে হলো free শব্দের পর স্পেসসহ course ওয়ার্ড টা খুজে বের করবে
তারপর স্পেস সহ free ওয়ার্ড টার পরের course শব্দটাকে replace করে paichi শব্দটাকে আউটপুট দেখাবে
