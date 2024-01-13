# negative lookbehind

```php

<?php

$pattern = '/(?<!free\s)course/m';

$str = "free course
paid course
enroll course
free course
";

$matches = preg_replace($pattern,"paichi",$str);  

print_r($matches);
?>
```

উপরের কোডে প্যারেনথিসিস() এর ভেতরে ?<! মানে হলো negative lookbehind অর্থাৎ  এই চিহ্নের পরে যে প্যাটার্ন থাকবে 
তা exact match খুজে বের করে , এটি ছাড়া বাকি সকল ওয়ার্ড কে আউটপুট হিসেবে দেখাবে।

যেমন উপরে `(?<?free\s)` course মানে হলো free শব্দের পর স্পেসসহ course ওয়ার্ড টা খুজে বের করবে
তারপর স্পেস সহ free ওয়ার্ড টাকে বাদ দিয়ে, অন্যান্য শব্দের থেকে  course শব্দটাকে replace করে paichi শব্দটাকে আউটপুট দেখাবে
