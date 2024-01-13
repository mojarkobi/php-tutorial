<?php

// যখন অবজেক্ট এর প্রোপার্টি গুলির নাম ,ভ্যালু ,ডাটা টাইপ, স্ট্রাকচার সব গুলিকে স্ট্রিং ফরমেটে 
// storage representation form এ রাখা দরকার হবে তখন আমরা ‍ serialize($obj) ফাংশন ব্যবহার করে এটা করতে পারি।
// তবে  একটা বিষয় হলো যে  এই serialize($obj) ফাংশন ব্যবহার করে ডাটা ‍গুলিকে serialize করে রাখলে।
// তখন দেখা যায় যে অবজেক্টের ভেতরে থাকা সকল প্রোপার্টি গুলিকে করে ফেলে 
// কিন্তু আমরা যদি চাই যে শুধু নির্দিষ্ট কিছু প্রোপার্টি গুলিকে  সিরিয়ালাইজ করবো তখন 
// __sleep()  এর থেকে যে প্রোপার্টি গুলিকে রিটার্ন করা হবে সেগুলি শুধু এই ‘serialize($obj)‘ মেথড সেরিয়ালাইজ করবে।


class Employee
{
    public $name;
    public $email;
    public $hobby = ["singing", "drawing"];

    public function __construct($name)
    {
        $this->name = $name;

    }
    public function setMail($email)
    {
        $this->email = $email;
    }

    public function __sleep()
    {
        return array('email', 'hobby');
    }

}


$obj = new Employee("ashik");

$obj->setMail("mojarcoder@gmail.com");
echo serialize($obj);

?>