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



