<?php
require "product.php";
require "test.php";

$obj1 = new Pro\Product(); // here Pro is a namespace of product.php file 
$obj1 = new testing\Product(); // here Testing is a namespace of test.php file 

