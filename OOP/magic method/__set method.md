# __set() method in-depth tutorial

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
