# __call method in details

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
