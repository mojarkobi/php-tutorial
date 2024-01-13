# string tokenization techniques related functionality

strtok() function টি দিয়ে স্ট্রেংকে ছোট ছোট করে ভেংগে
টোকেন বানায়।

strtok() function ‍explode() function এর মাঝে  পাথর্ক্য হলো
explode('delimiter',$string) এরকম করে কল করা হয়। আর strtok($string,'') এমন করে।

আবার explode() ডেলিমিটার এর উপর ভিত্তি করে সম্পুর্ন স্ট্রিংকে  একটি অ্যারে বানিয়ে ফেলে
কিন্তু strtok() প্রথমবার কল করার সময় $string delimiter

```php

<?php
// generate token by split string and it keep tracking of token

$str = 'Hello dear friends please visit my, site';
$token = strtok($str, " "); // first parameter is string 2nd is token delimiter 
echo $token;
$token = strtok(" "); // now need only mention token delimiter not string parameter
echo $token;
$token = strtok(","); 
echo $token;
?>

```

## strtok function in-depth tutorial

```php

<?php
// generate token by split string and it keep tracking of token

$str = "Hello dear friends please visit my, \nsite";
$token = strtok($str, " "); // first parameter is string 2nd is token delimiter 
echo $token;
$token = strtok(" "); // now need only mention token delimiter not string parameter
echo $token;
$token = strtok(" "); 
echo $token;
$token = strtok(" "); 
echo $token;
//echo $token;
//echo $token;
?>
```

```
উপরের কোডে $token = strtok($str, " "); এর  মধ্যে প্রথম প্যারামিটার টি স্ট্রিংকে গ্রহন করেছে,
দ্বিতীয় প্যারামটিার টি token delimiter হিসেবে whitespace গ্রহন করেছে।

সুতরাং এটি $str থেকে ০ ইনডেক্স থেকে শুরু করে প্রথম ম্যাচ whitespace এর বরাবর কোপ দিয়ে কেটে
Hello শব্দটি রিটার্ন করে echo $token; দিয়ে আউটপুট করেছে।

তারপর আবার পরবর্তী লাইনে $token = strtok(" "); এই লাইনের মানে পূর্বে যে বরাবর কোপ দিয়ে 
কেটেছিলো মানে Hello dear এর মাঝখানের whitespace থেকে শুরু হয়ে dear friends এর মাঝখানের whitespace বরাবর কোপ মারা হলো
সুতরাং এবার আবার অবশিষ্ট স্ট্রিং থেকে dear শব্দটি কেটে আসলো তারপর আবার echo $token; দিয়ে আউটপুট বের করা হলো।

উপরের কোডে যেহেতু ৪ বার strtok(" ") কল হয়েছে তাই এটি মোট ৪টি কোপ দিয়ে অবশিষ্ট স্ট্রিং  থেকে  ‍স্ট্রিং কেটে বের করে আনছে

বিঃদ্রঃ শুধু প্রথমবার কল করার সময় একটি স্ট্রিং প্রথম প্যারামিটারে গ্রহন করে দ্বিতীয় প্যারামিটারে টোকেন ডেলিমিটার
তারপর থেকে যতবার Subsequent calls করবে strtok  কে ততবার আর স্ট্রিং দেয়া যাবে না। 
তখন শুধু delimiter যেমন $token = strtok(" ");

```
