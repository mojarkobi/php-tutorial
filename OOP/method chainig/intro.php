<?php

class test{
    public function first(){

        echo "this is from first function\n";
        return $this;
    }
    public function second(){

        echo "this is from second function\n";
        return $this;
    }
    public function third(){

        echo "this is from third function\n";
        return $this;
    }

}


$obj = new test();
// $obj->first();
// $obj->second();
// $obj->third();

$new = $obj->first()->second()->third();

