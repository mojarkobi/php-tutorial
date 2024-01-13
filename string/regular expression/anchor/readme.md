# dollar sign anchor example

```php

<?php

$pattern = "/\w+$/";

$string = "the name of our school is *-+.*baira";

$string2 = preg_replace($pattern,"duira", $string); // last baira word ti match kore duira kore felbe

echo $string2;
?>
```

`\w+$`  এই প্যাটার্ন এর  \w মানে শুধুমাত্র যেকোনো বর্ণ আর তারপরের + মানে হলো 1 অথবা more occurence 
তারপরের $ মানে হলো এটি স্ট্রিংয়ের শেষ থেকে ম্যাচ করবে। আর সেজন্য এটি baira শব্দটি শুধুমাত্র ম্যাচ করবে।

উপরে baira শব্দটি ম্যাচ করবে। কারণ েএটি ‍স্ট্রিংয়ের শেষে আছে এর এটির সামনে স্পেস থাকার কারণে আর সামনের শব্দগুলা ম্যাচ করেনি। 

## caret ^ sign example

```php
<?php

$pattern = "/^\w+/";

$string = "the name of our school is *-+.*baira";

$string2 = preg_replace($pattern,"duira", $string); // last baira word ti match kore duira kore felbe

echo $string2;
?>
```

`\w+$`  এই প্যাটার্ন এর  \w মানে শুধুমাত্র যেকোনো বর্ণ আর তারপরের + মানে হলো 1 অথবা more occurence

 ^ মানে হলো এটি স্ট্রিংয়ের শুরু থেকে ম্যাচ করবে। আর সেজন্য এটি the শব্দটি শুধুমাত্র ম্যাচ করবে।

উপরে the শব্দটি ম্যাচ করবে। কারণ এটি ‍স্ট্রিংয়ের শুরু তে আছে। তারপরের \w মানে শুধুমাত্র যেকোনো বর্ণ আর তারপরের + মানে
হলো 1 অথবা more occurence এর এটির সামনে স্পেস থাকার কারণে আর সামনের শব্দগুলা ম্যাচ করেনি।
