
Variable-length argument lists ¶
PHP has support for variable-length argument lists in user-defined functions by using the ... token.

Argument lists may include the ... token to denote that the function accepts a variable number of arguments. 
The arguments will be passed into the given variable as an array:


মানে এখন   ... অপারেটর যাকে অন্য ল্যাংগুয়াজে splat operator বলে 

এটি দিয়ে  ফাংশন প্যারামিটারে একাধিক প্যারামিটার গ্রহন করা যায় একটি অ্যারে হিসেবে  

যেমন function functionName($name,...$numbers)  এখানে ... পরে $numbers হলো 

একটি অ্যারে যা ফাংশন কল functionName('ashik',25,36,40);  থেকে  প্রথম আরগুমেন্ট  'ashik' যাবে functionName($name, তে 
আবার বাকি 25,36,40 আরগুমেন্ট গুলা যাবে ...$numbers তে অ্যারে এলিমেন্ট হিসেবে


Example #11 Using ... to access variable arguments

<?php
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);
?>
The above example will output:

10





## ‍ another example


<?php
function f($req, $opt = null, ...$params) {
    // $params is an array containing the remaining arguments.
    printf('$req: %d; $opt: %d; number of params: %d'."\n",
           $req, $opt, count($params));
}

f(1);
f(1, 2);
f(1, 2, 3);
f(1, 2, 3, 4);
f(1, 2, 3, 4, 5);
?>


Argument unpacking via ... ¶
Arrays and Traversable objects can be unpacked into argument lists when calling functions by using the ... operator. This is also known as the splat operator in other languages, including Ruby.

<?php
function add($a, $b, $c) {
    return $a + $b + $c;
}

$operators = [2, 3];
echo add(1, ...$operators);
?>

add(1, ...$operators); এর মাঝে ...$operators দিয়ে $operators ‍অ্যারে থেকে এর ইলিমেন্ট গুলিকে , দিয়ে আরগুমেন্ট বানিয়ে পাস করা হচ্ছে।


