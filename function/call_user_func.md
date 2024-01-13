# call_user_func_array in details

`call_user_func_array` is a function in PHP that allows you to call a callback with an array of parameters. The callback can be any valid PHP callable, such as a function name, a method of an object, or a static method of a class.

Here's the basic syntax of `call_user_func_array`:

```php
call_user_func_array(callback $callback, array $param_arr): mixed
```

- `$callback`: The callable function or method.
- `$param_arr`: An array containing the parameters to pass to the callback.

Here's a simple example:

```php
<?php
function sum($a, $b) {
    return $a + $b;
}

$params = [2, 3];

$result = call_user_func_array('sum', $params);

echo $result; // Output: 5
?>

```

In this example, the `sum` function is called with the parameters 2 and 3 using `call_user_func_array`.

Starting from PHP 5.6, you can use the `...` (splat) operator to achieve the same result more concisely:

```php
 $result = sum(...$params);
```

This is equivalent to the previous example using `call_user_func_array`. The splat operator unpacks the elements of the array and passes them as separate arguments to the function
