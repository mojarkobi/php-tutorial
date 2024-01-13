# magic method in depth tutorial

magic method তখনি কল হয় যখন এটি ক্লস অবজেক্ট রিলেটেড specific event হয়।

যেমন ক্লাসের অবজেক্ট বানালে __construct() method কল হয়।
ক্লাসের এবং script  এর সকল কোড রান হওয়ার পর `__destruct()` method কল হয়।

ক্লাসের বাহির থেকে প্রাইভেট অথবা প্রটেক্টেট মেথডকে কল করলে `__call() method` কল হয়ে যায়।

ক্লাসের বাহির থেকে প্রাইভেট অথবা প্রটেক্টেট প্রপার্টি সেট করার চেষ্টা করলে `__set() method` কল হয়ে যায়।

ক্লাসের বাহির থেকে প্রাইভেট অথবা প্রটেক্টেট প্রপার্টি access করার চেষ্টা করলে `__get() method` কল হয়ে যায়।

ক্লাসের বাহির থেকে প্রাইভেট অথবা প্রটেক্টেট ‍static মেথডকে কল করলে `__callStatic()`  কল হয়ে যায়।

ক্লাসের বাহির থেকে প্রাইভেট অথবা প্রটেক্টেট প্রপার্টি isset() দিয়ে চেক করলে `__isset()` কল হয়ে যায়

ক্লাসের বাহির থেকে প্রাইভেট অথবা প্রটেক্টেট প্রপার্টি unset() দিয়ে চেক করলে `__unset()` কল হয়ে যায়

## নিচে সকল মেজিক মেথডের ব্যবহার নিয়ম দেখানো হলো।

## __autoload function all usage and use case and deprecation

```php

function __autoload($classFile){
    require_once("classes/$classFile"); // here classFile means which class file object try to create
}


// autoload function depreacat in php 7 and no longer support php8 
// use spl_autoload_register() instead of __autoload function
$obj1 = new FirstClass();
?>
```

## autoload class now with using the `spl_autoload_register` function.

The `__autoload` method was used in older versions of PHP to automatically load classes when they were instantiated but not yet defined. However, this method has been deprecated in PHP 7 and is not recommended for use. Instead, it's recommended to use an autoloader function or register an autoloader using the `spl_autoload_register` function.

Here's an example of how you might use `spl_autoload_register`:

```php
<?php

// important rule that if class name is 'ashik' then it file name also be 'ashik.php'
// Autoloader function
function myAutoloader($className) {
    $classFile = __DIR__ . '/' . $className . '.php';
    if (file_exists($classFile)) {
        include $classFile;
    }
}

// Register the autoloader function
spl_autoload_register('myAutoloader'); // when try to creat any object this function automaticaly call to load class file

// Now, when you instantiate a class, PHP will attempt to load the class file using the autoloader
$obj = new MyClass();
?>

```

In this example:

- The `myAutoloader` function is a simple autoloader that includes the class file if it exists.
- `spl_autoload_register` is used to register the autoloader function.

It's important to note that using Composer's autoloading functionality is a more modern and widely adopted approach in PHP projects. If you're starting a new project or working with an existing one, consider using Composer for autoloading.

## __call method in details

যখন ক্লাসের এমন কোনো মেম্বার ফাংশন কে কল করার চেষ্টা করা হয় যেটি private অথবা non exists সেক্ষেত্রে পিএইচপি
এরর দেখায় যেটা সাধারণ ইউজার কে প্রফেশনালভাবে উপস্থাপন করা যায়না।
সেক্ষেত্রে আমরা চাইলে এমন একটি ব্যবস্থা করতে পারি যে।
যখন ক্লাসের এমন কোনো মেম্বার ফাংশন কে কল করার চেষ্টা করা হবে
তখন সরাসরি এরর না দেখিয়ে এটি মেজিক মেথড __call($method,$args) কে কল করবে
এখন এই ফাংনশ থেকে চাইলে এরর মেসেজ শো করলে পারবো আবার এটার সাহায্য প্রাইভেট মেথডটাকে কল করালেও পারবো।

আবার non exists মেথড হলে সেক্ষেত্রে এটি চেক করেও নানা রকম কাজ করতে পারবো।

```php

<?php

class test
{

    private $fname;
    private $lname;
    private function setName($firstname, $lastname)
    {
        $this->fname = $firstname;
        $this->lname = $lastname;
    }

    public function __call($method,$args){

        echo "sorry this method private or non exists\n";
        print_r($args);
    }
}


$obj = new test();

$obj->setName("ashik","ahmed");
?>

```

## using __call() method how do call private method and check non exists method

নিচ দেখানো হলো কেমন করে পিএইচপি তে private method কে ক্লাসের বাহিরে থেকে কল করে

এক্সেস করা যায়।

নিচে আমি `call method_exists ($this, $method) ফাংশন এর মাধ্যমে একটি অবজেক্টের মেথড এক্সিস্ট কিনা চেক করার জন্য ব্যবহার করেছি।`
তারপর `call_user_func_array([$this, $method], $args); এটিতে $this অবজেক্ট আর $method হলো সেই অবজেক্ট এর মেথড এবং $args হলো`
`এই মেথড কে কল করার জন্য আরগুমেন্ট এর অ্যারে।`

```php

<?php

class person
{

    private $fname;
    private $lname;
    private function setName($firstname, $lastname)
    {
        $this->fname = $firstname;
        $this->lname = $lastname;
    }

    public function getName()
    {
        return $this->fname . " " . $this->lname;
    }

    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {

            call_user_func_array([$this, $method], $args); // this method work like this $this->method($args)  here $args is array of parameter
        } else {
            echo "sorry dear this method: $method does not exists into\n";
            print_r($this);

        }
    }
}


$obj2 = new person();

$obj2->setName("ashik", "ahmed");
echo $obj2->getName();

?>

```

## __get() method in-depth tutorial

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

## __set() method in-depth tutorial

যখন পিএইচপি তে কোন ক্লাসের অবজেক্ট বানিয়ে এমন কোন প্রপার্টি তে ভ্যালু  সেট করার চেষ্টা করা হয়
যেট কিনা private অথবা non exist সেক্ষেত্রে __set() মেজিক মেথড টি কল হয়ে যায়।
এই মেথড যে নামের প্রপার্টিতে ভ্যালু  অ্যাসাইন করার চেষ্টা করা হচ্ছে সেটার নাম ও ভ্যালু
দুটি `__set()` মেথডের প্যারামিটার হিসেবে পাস হয়ে যায়।
first parameter হলো প্রপার্টি নাম second parameter  হলো প্রপার্টি ভ্যালু

```php

<?php

class test{
    private $name;
    public function show(){

        echo $this->name;
    }

    public function __set($propertyName,$propertyValue){

        echo "sorry your are try to set property $propertyName with 
        value $propertyValue which either non-exist or private property\n";
    }
}

$obj = new test();

$obj->names = "ashik";

?>

```

## নিচে দেখানো হলো প্রাইভেট প্রোপার্টি তে কেমন করে ভ্যালু এসাইন করা যায়

```php

<?php

class test{
    private $name;
    public function show(){

        echo $this->name;
    }

    public function __set($propertyName,$propertyValue){
      
      if(property_exists($this,$propertyName)){
        
        $this->$propertyName = $propertyValue; // $propertyName use doller sign because it's a method parameter
        // and it has the original property name 
      }
      else{
        echo "sorry property name `$propertyName` not exist \n";
      }

    }
}

$obj = new test();

$obj->names = "ashik";

$obj->name = "ashik";

$obj->show();


?>

```

## unset method usage rule

__unset() magic method দিয়ে ক্লাসের কোন private method
যদি সরাসরি অবজেক্ট বানিয়ে ক্লাসের বাহির থেকে undefine বা unset করার প্রয়োজন হয় তখন
এটির সেই কাজটা করতে সাহায্য করে।

কিন্তু প্রাইভেট মেথড আর প্রটেক্টেড মেথড ছাড়া পাবলিক মেথডে  এরকম দরকার হয়না।

## নিচে উদাহরণ এর দ্বারা বুঝানো হলো এটি কিভাবে করা সম্ভব

```php

<?php

class Student
{
    private $name;
    public $city = "cumilla";
    public function show($propertyName)
    {

        echo $this->$propertyName, PHP_EOL;
    }

    // here set the property by the  help of __set() method
    public function __set($propertyName, $propertyValue)
    {

        if (property_exists($this, $propertyName)) {

            $this->$propertyName = $propertyValue; // $propertyName use doller sign because it's a method parameter
            // and it has the original property name 
        } else {
            echo "sorry property name `$propertyName` not exist \n ";
        }

    }

    public function __unset($propertyName){

        unset($this->$propertyName);
    }
        

}

$obj = new Student();

$obj->names = "ashik"; // output sorry property name `name` does not exist 

$obj->name = "ashik";

$obj->show("name"); // show name property value

$obj->show("city");

unset($obj->city); // now it unset or undefine this public property city directly from this outside position of class

unset($obj->name); // now it unset by the help of running the __unset() magic method inside the class Student


?>
```

## নিচে দেখানো হলো __callStatic() method এর ব্যবহার

```php

<?php

class Student{

    private static function showRollNo(){
        echo "roll is 12";
    }

    public static function  __callStatic($name, $arguments){
        echo "Sorry, this is a private method {$name} and args " . implode(', ', $arguments) . ". You do not have access.";
    }
}

// Attempting to call a private static method using __callStatic
Student::showRollNo();
?>

```

## __toString method usage

```php
<?php

// __toString magic method used to show custom error when user try to echo $object
// কোন ক্লাসের অবজেক্টকে echo করার চেষ্টা করলে মানে অবজেক্ট টু স্ট্রিং করার চেষ্টা করলে।
// তখন এই মেথড কল হয়ে যায়  এবং এটার বার্তা টি যেখান থেকে কল করা হয়েছে সেখানে রিটার্ন করা হবে।
// তাই অবশ্যই এই মেথড থেকে কোনো না কোনো ভ্যালু রিটার্ন করা লাগবে

class Employee{

    public $name;

    public function __construct($name){
        $this->name = $name;
        
    }

    public function __toString(){

        return "you are trying to echo object to string but it's not possible";
    }
}

$obj = new Employee("ashik");
echo $obj;
?>
```
