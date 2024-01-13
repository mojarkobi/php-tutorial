# positive lookahead

```php
<?php

$pattern = '/the(?=\sname)/';

$str = "the name of our school is the name baira";

preg_match_all($pattern,$str,$matches);  // output 'the' 'the'

print_r($matches);
?>
```

উপরের কোডে প্যারেনথিসিস() এর ভেতরে ?= মানে হলো positive lookahead অর্থাৎ  এই চিহ্নের পরে যে প্যাটার্ন থাকবে 
তা খুজে বের করে এটার সামনের ওয়ার্ড টা কে আউটপুট হিসেবে দেখাবে
যেমন উপরে the(?=\sname) মানে হলো স্পেস সহ name ওয়ার্ড টা খুজে বের করবে তারপর স্পেস সহ name ওয়ার্ড টার সামনের the শব্দটাকে আউটপুট দেখাবে

## negative lookahead

```php
<?php

$pattern = '/\d{3}(?!\sIndia)/m';

$str = "102 Bangladesh
205 India
2020 Pakistan
20 Nigeria
12345 Beijing
203 Nepal";

preg_match_all($pattern,$str,$matches);  // output 'the' 'the'

print_r($matches);
?>
```

উপরের কোডে প্যারেনথিসিস() এর ভেতরে ?! মানে হলো negative lookahead অর্থাৎ  এই চিহ্নের পরে যে প্যাটার্ন থাকবে 
তা exact match খুজে বের করে, এটা ছাড়া অন্য mismatch pattern থেকে এটার সামনের ওয়ার্ড টা কে আউটপুট হিসেবে দেখাবে
যেমন উপরে \d{3}(?!\sIndia) মানে হলো স্পেস সহ India ওয়ার্ড টা খুজে বের করবে তারপর স্পেস সহ India ওয়ার্ড টাকে
বাদ দিয়ে অন্য গুলা আউটপুট দেখাবে

যেমন 102 Bangladesh থেকে 102 তারপর 2020 Pakistan থেকে 202 তারপর 12345 Beijing থেকে 123 তারপর 203 Nepal থেকে 203

কিন্তু 205 India বাদ পড়বে কারন এটা ম্যাচ করছে আর নেগেটিভ লুক এহেড মানে হলো যেটা ম্যাচ করবে সেটা বাদে বাকি গুলা আউটপুট দেখাবে


## নিচে গ্রুপিং করে ম্যাচ খুজে mismatch কিভাবে বের করতে হয় দেখানো হলো

```php
<?php

$pattern = '/\d{3,}(?!\s(India|Pakistan))/';

$pattern2 = '/\d{3,}(?!\s(India|Nepal))/';

$str2 = "102 Bangladesh
205 India
2040 Pakistan
60 Nigeria
12345 Beijing
203 Nepal";

preg_match_all($pattern,$str2,$matches);  

print_r($matches); // 2040 pakistan থেকে 204 সহ output দেখাবে কারন এর pattern exact  match হয়নি


preg_match_all($pattern2,$str2,$matches2);  

print_r($matches2); // এটার বেলায় 203 আউটপুট ম্যাচ দেখাবে না কারন এর 203 Nepal অংশটি  exact match  করেছে তাই negative lookahead নিয়ম অনুযায়ী
//এটি আউটপুট দেখাবে না অর্থাৎ ignore korbe


?>
```

## positive lookbehind

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

## negative lookbehind

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

যেমন উপরে (?<?free\s)course মানে হলো free শব্দের পর স্পেসসহ course ওয়ার্ড টা খুজে বের করবে
তারপর স্পেস সহ free ওয়ার্ড টাকে বাদ দিয়ে, অন্যান্য শব্দের থেকে  course শব্দটাকে replace করে paichi শব্দটাকে আউটপুট দেখাবে
