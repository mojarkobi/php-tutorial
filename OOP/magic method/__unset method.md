# unset method usage rule

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
