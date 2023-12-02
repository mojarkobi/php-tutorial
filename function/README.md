# function default parameter

```php
<?php

    function functionName($default_parameter = 25){
      return $default_parameter += 25;
    }
    echo functionName();
    ?>
```

uporer code $default_parameter = 25 diye deyar mane ati optional parameter hoye gelo
 tai functionName(); arokom call koreo result 50 dekhachhe karon $optional_parameter hisebe 25 set hoyeche;

## php type hinting or type fix kore deya

```php
<?php

 function functionName(int $n):int{
    
    return $n
 }

 functionName(25);
 ?>
```

uporer code a ami je functionName(int $n):int ai part likhlam parenthese ar vitor parameter ar samne ta bujaiche je ati int type parameter nibe

abar uporer () parenthese ar por je int word ta use korlam atar mane ai function ar return type int . mane int value return kora jabe

## Variable-length argument lists

PHP has support for variable-length argument lists in user-defined functions by using the ... token.

Argument lists may include the ... token to denote that the function accepts a variable number of arguments. The arguments will be passed into the given variable as an array:

### Example #11 Using ... to access variable arguments

```php
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
```

The above example will output:
10

# Argument unpacking via ...

Arrays and Traversable objects can be unpacked into argument lists when calling functions by using the ... operator. This is also known as the splat operator in other languages, including Ruby.

```php

<?php
function add($a, $b, $c) {
    return $a + $b + $c;
}

$operators = [2, 3];
echo add(1, ...$operators);
?>
```



add(1, ...$operators); এর মাঝে ...$operators দিয়ে $operators ‍অ্যারে থেকে এর ইলিমেন্ট গুলিকে কমা দিয়ে আরগুমেন্ট বানিয়ে পাস করা হচ্ছে।

### in every big task can be split into smaller part then try to fix every small problem then finaly complete task can be done easily

```PHP 
<?php

  function task1(){
    echo "task1 completed \n";


  }

  function task2(){
    echo "task2 completed \n";

    
  }

  function task3(){
    echo "task3 completed \n";

    
  }

  function task4(){
    echo "task4 completed \n";

    
  }


  function doBigTask(){

      task1();
      task2();
      task3();
      task4();


  }


  doBigTask();

?>

```

  uporer code ar moto korle sohojei big task ke small part a divide kore sohoje manage kora r debug kora jay
