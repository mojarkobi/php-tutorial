<?php


function factorial($n){

    if($n <= 1){
        return 1;
    }
    return $n * factorial($n - 1);

}

echo factorial(3);


/*

উপরের কোড টা নিচের মতো করে কাজ করেছে

return 3 * factorial(3 - 1);
return 2 * factorial(2 - 1);
return 1 ;



আসলে যখন echo factorial(3); এটা কল হলো তখন  3 কে পাস করলো আরগুমেন্ট হিসেবে  তারপর নিচের   স্টেটমেন্ট এর মতো করে কাজ করেছে

যেমন return $n * factorial($n - 1); বা  return 3 * factorial(3 - 1); বা return 3 * factorial(2);

তারপরের রিকার্সিভ কলে  return $n * factorial($n - 1); বা  return 2 * factorial(2 - 1); বা  return 2 * factorial(1);


তারমানে return 2 * factorial(1); লাইনের  factorial(1) অংশে $n parameter value 1 

তাই    if($n <= 1){
          return 1;   এই কোডের 1 রিটার্ন প্রদান করছে    আর ফাইনাল ভ্যালু রিটার্ন করার কারনে এটি এখন 
         }  
 এর আগের ফাংশন কলের পর পেন্ডিংয়ে থাকা ফাংশনের ফলাফল পেলো; এর এরকম করেই সব গুলি পেন্ডিয়ে থাকা ফাংশনের মান ফিলাপ হওয়ার পর 
 ফাইনাল আউটপুট আসলো


return 1 ;

*/