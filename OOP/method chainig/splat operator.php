<?php
/*
splat operator use to unpack argument and receive function argument as a array

*/
function select(...$columns) // receive function argument as a array of parameter
{
    print_r($columns);

}


select("mango", "apple", 256);


$foods = ['ice-cream','biscuit'];

select(...$foods); // unpack array of foods element using splat operator `...` and pass all element as argument
?>