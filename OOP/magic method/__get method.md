# __get() method in-depth tutorial

যখন আমরা ক্লাসের এমন কোনো প্রপার্টি এক্সেস করার চেষ্টা করি, যা private অথবা exist করেনা।
সেক্ষেত্রে  পিএইচপি এরর দেখাবে কিন্তু যদি আমরা যদি চাই যে অন্য কোনো কাস্টম বার্তা প্রদান করতে
অথবা কোনো বিশেষ একশন নিতে। তখন আমরা __get() method ব্যবহার করে, সেটা করতে পারবো।

```php

<?php

class test{
    private $name = "ashik";
    
    function __get($receivedName){
        echo "sorry dear your are try to access non exist or private property ($receivedName) \n";
    }

}


$obj = new test();


$obj->name;
$obj->receivedName;
?>
```

## here i show how do access private array property using __get method

```php

<?php

class test2{

    private $foods = ['fruit'=>'mango,apple','vegetable'=>'tomato,brinjal'];

    function __get($receivedWord){
        if(array_key_exists($receivedWord, $this->foods)){

            echo  "congrats found the key `$receivedWord` value is `{$this->foods[$receivedWord]}` \n";
        }
        else{
            echo "sorry this array key ($receivedWord) is not found \n";
        }
    }

}

$obj2 = new test2();

$obj2->n;
$obj2->fruit;
?>
```
