<?php
class test
{
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function show_post(){

        return "this is post title {$this->id} \n";
    }

}

function getPost($id)
{
    if($id > 50 ){
        return; // this is return null

               // return null;  this syntax also work
    }

    return new test($id); // return test class object
}

$obj = getPost(55); // assign object into $obj variable by getPost() method

echo $obj?->show_post() ?? "invalid post";

/*
উপরের `$obj?->show_post()` কোডে যখন $obj তে valid অবজেক্ট থাকবে তখনি show_post() invoke করবে।
কিন্তু যদি $obj তে null value থাকে তখন $obj এরপর ? থাকার 
কারনে null safe operation হবে এবং show_post() মেথডটি invoke বা কল হবেনা সুতরাং এররও আসবেনা
*/