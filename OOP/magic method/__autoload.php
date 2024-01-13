<?php

function myAutoLoad($className)
{
    $classFile = include __DIR__. "/" . $className . ".php";
    if (file_exists($classFile)) {
        include $classFile;
    }
}

spl_autoload_register("myAutoLoad"); // when try to creat any object this function automaticaly call to load class file

$obj1 = new FirstClass();
?>