<?php

// যখন অবজেক্ট এর প্রোপার্টি গুলির নাম ,ভ্যালু ,ডাটা টাইপ, স্ট্রাকচার সব গুলিকে স্ট্রিং ফরমেটে 
// কনর্ভাট করে স্টোর করে রাখতে চাই তখন serialize($obj) ব্যবহার করে স্ট্রিং স্টাইল অ্যারে বানিয়ে স্টোর করাতে পারি।
// কিন্তু যদি সেই সিরিয়ালাইজ স্ট্রিং অ্যারে থেকে ডাটা  php array বানাতে চাই সেক্ষেত্রে unserialize($serializeData); ব্যবহার করে করতে পারি।
// unserialize করার সময় __wakeup() মেজিক মেথড অ্যাটো কল হয়ে যায়।

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

    public function __wakeup(){
        echo "__wakeup method work";
    }

}


$obj = new Employee("ashik");

$obj->setMail("mojarcoder@gmail.com");
$serializeData = serialize($obj);

echo $serializeData;

$unserializeData = unserialize($serializeData); // here unserialize actual object and assign into $unserializeData. 
// so we can access object $unserializeData of Employee class

print_r($unserializeData);

echo $unserializeData->email; // here using $unserializeData echo the email property value


?>