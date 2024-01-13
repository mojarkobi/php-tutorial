<?php

class Student{

    private static function showRollNo(){
        echo "roll is 12";
    }

    public static function  __callStatic($name, $arguments){
        echo "Sorry, this is a private method {$name} and args " . implode(', ', $arguments) . ". You do not have access.";
    }
}

// Attempting to call a private static method using __callStatic
Student::showRollNo();
