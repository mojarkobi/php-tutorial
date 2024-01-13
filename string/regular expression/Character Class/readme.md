# \b boundry match meta character

```php

<?php
$pattern = "/m\b/";
$string = "masuk ahmed thim  team";

preg_match_all($pattern,$string,$matches);  // ahmed ar `m` match hobena thim theke m and team theke m hobe

// karon ahmed ar `m` holo majhkhane  masuk ar `m` holo start a kintu jegula word ar pechone diye match korbe segula shudu match korbe

print_r($matches);
?>

```

ahmed এর `m` match হবেনা thim থেকে `m` এবং team থেকে `m` হবে
কারন ahmed এর `m` হলো মাঝখানে  masuk এর  `m` হলো  start a
কিন্তু যেগুলা word এর ডানপাশে খুজে পায়ছে সেগুলা শুধু ম্যাচ করেছে।
