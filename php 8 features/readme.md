# php 8 all features explain here

match [¶](https://www.php.net/manual/en/control-structures.match.php#control-structures.match)
----------------------------------------------------------------------------------------------

(PHP 8)

The `match` expression branches evaluation based on an identity check of a value. Similarly to a `switch` statement, a `match` expression has a subject expression that is compared against multiple alternatives. Unlike `switch`, it will evaluate to a value much like ternary expressions. Unlike `switch`, the comparison is an identity check (`===`) rather than a weak equality check (`==`). Match expressions are available as of PHP 8.0.0.

**Example #1 Structure of a `match` expression**

```php
<?php
$return_value = match (subject_expression) {
    single_conditional_expression => return_expression,
    conditional_expression1, conditional_expression2 => return_expression,
};
?>
```

**Example #2 Basic `match` usage**

```php
<?php
$food = 'cake';
$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};
var_dump($return_value);
?>

```
**Example #3 basic `match` with multi condition**

```php
<?php


$price = 500;

switch($price){
    case "500":
        $result = "value is not matched with it data type strictly\n";
        break;
    case 500:
        $result = "value is match with strictly\n";
}


echo $result;

// here check with match expression which is checked value with === means stricty matach value

$result2 = match($price){
    "500" => "value is not matched with it data type strictly\n",
    500 => "value is match with strictly\n",
};

echo $result2;

// another example with mutliple condition

$age = 18;

echo match($age){
    25,18 => 'age is elegible'
};
?>
```

## php named argument

```php

<?php

// named argument can eliminate to maintain argument order when it need to call the function
function personInfo($name, $age, $hometown, $currentcity = "dhaka")
{

    echo "person name is $name his age: $age, hometown: $hometown, currentcity: $currentcity";

}

personInfo(age: 25, hometown:"cumilla",name: "ashik" );
?>
```

## constructor property promotion

constructor property promotion ফিচারটি আসার আগে পিএইচপি 7 এ __construct() মেথড দিয়ে
class এর  public private protected property তে ভ্যালু এসাইন করার সময় আলাদা করে
ক্লাসেও প্রথমে property ডিক্লেয়ার করা লাগতো।

কিন্তু পিএইচপি 8 এ constructor property promotion ফিচারটি আসার পর থেকে

সরাসরি ভ্যালু __construct() মেথড এর ভেতরেই public private protected এবং ডাটা টাইপ উল্লেখ করে ভ্যালু এসাইন করা যায়

## নিচে constructor property promotion সুবিধাটি পিএইচপি 7 এর সাথ তুলনা করে দেখানো হলো

```php

<?php

// before php 8 version we need write property separately when set property with constructor
class test1
{
    public string $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

    }

    public function changvalue($name, $age)
    {

        $this->name = $name;
        $this->age = $age;

    }
}

$obj = new test1("ahmed", 25);

$obj->changvalue("ashik", 26);

echo $obj->name . " " . $obj->age;

echo PHP_EOL;


// here php 8 new features called constructor property promotion
class test2
{

    public function __construct(public string $name, public $age)
    {

        // no need to asign value here into $name and $age
        // because these property asign value inside __construct parameter when it called

    }

    public function changvalue($name, $age)
    {

        $this->name = $name;
        $this->age = $age;

    }
}

$obj = new test2("ahmed", 25);

$obj->changvalue("ashik", 26);

echo $obj->name . " " . $obj->age;
?>
```
