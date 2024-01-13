# __isset() method indepth

পিইএইচপি তে isset() ব্যবহার করে কোন ভ্যারিয়েবল অথবা অবজেক্ট অথবা অ্যারে সেট করা হয়েছে কিনা
সেটা চেক করা যায়।

কিন্তু php object oriented programing (oop) তে private property set হলো কিনা। সেটাকে যদি ক্লাসের বাহির

থেকে চেক করার প্রয়োজন হয় এবং যদি isset() দিয়ে ক্লাসের বাহির থেকে কল করা হয়,
এটা এমটি আউটপুট দেয়, মানে কাজ করেনা।

তবে ক্লসের ভেতর থেকে কাজ করে এবং ক্লাসের বাহির থেকে public property তে চেক করা যায়।

```php

<?php

class Student
{
    public $name;
    private $fullName;
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
}

$obj = new Student();

$obj->name = "Hridoy"; // directly set name property outside the class

$obj->setFullName("Ashik");

echo isset($obj->name); // output 1

echo isset($obj->fullName); // output 0 so no output shown.

?>
```

উপরের কোডের echo isset($obj->fullName) দিয়ে fullName প্রোপার্টি কে চেক করার পর কোন আউটপুট দেখালো না
কারণ এটি private property তাই ক্লাসের বাহির থেকে এর ভ্যালু সেট হলো কিনা তা চেক করা যাচ্ছে না।

কিন্তু যদি আমরা যদি এটা ক্লাসের বাহির থেকে করতে চাই, সেক্ষেত্রে ক্লাসের ভেতরে `__isset($n)` মেজিক মেথড দিয়ে,
ক্লাসের বাহিরের isset() method কে আউটপুট অথবা ভ্যালু রিটার্ন করতে পারি।

**নিচে উদাহরণ দিয়ে দেখানো হলো কিভাবে  ক্লাসের বাহির থেকে `__isset()` মেজিক মেথড দিয়ে isset() মেথডেকে কার্যকর করা যায়।**

```php

<?php

class Student
{
    public $name = "hridoy";
    private $fullName;
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
    public function __isset($n) // here $n parameter receive property name
    {

        return isset($this->$n);  // here use $dollar sign becasu it's not property. it contain property as a parameter value

    }
}

$obj = new Student();

$obj->setFullName("Ashik");

echo isset($obj->name); // output 1

echo isset($obj->fullName); // output 1 because now this isset get output from __isset() method from the class

?>

```

__isset() method দিয়ে ভ্যারিয়েবল বা প্রপার্টি সেট হলো কিনা সেটা চেক করা বাদেও আরও অনেক রকম কাজ করা সম্ভব
