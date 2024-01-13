# splat operator in-depth

example of using the splat operator (`...`) to unpack arguments in a function.
The splat operator can be used to collect a variable number of arguments into an array, or to unpack an array into individual arguments.

In your example:

```php

<?php
/*
splat operator use to unpack argument and receive function argument as an array
*/
function select(...$columns) // receive function argument as an array of parameters
{
    print_r($columns);
}

select("mango", "apple", 256);

$foods = ['ice-cream','biscuit'];

select(...$foods); // unpack array of foods elements using splat operator `...` and pass all elements as arguments
?>
```

Here's what's happening:

1. The `select` function is defined to accept a variable number of arguments using the splat operator (`...$columns`). This means you can pass any number of arguments to the function, and they will be collected into the `$columns` array.

2. You first call `select("mango", "apple", 256);`, passing three arguments to the function. The function then prints the array of columns, which contains the values "mango", "apple", and 256.

3. You have an array `$foods` containing two elements: 'ice-cream' and 'biscuit'. You use the splat operator (`...$foods`) to unpack the elements of the array and pass them as arguments to the `select` function. As a result, the function prints the array of columns, which contains the values 'ice-cream' and 'biscuit'.

This is a concise way to work with variable numbers of arguments in PHP functions.
