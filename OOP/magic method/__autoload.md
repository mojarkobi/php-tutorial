# __autoload function all usage and use case and deprecation

```php

function __autoload($classFile){
    require_once("classes/$classFile"); // here classFile means which class file object try to create
}


// autoload function depreacat in php 7 and no longer support php8 
// use spl_autoload_register() instead of __autoload function
$obj1 = new FirstClass();
?>
```

## autoload class now with using the `spl_autoload_register` function.

The `__autoload` method was used in older versions of PHP to automatically load classes when they were instantiated but not yet defined. However, this method has been deprecated in PHP 7 and is not recommended for use. Instead, it's recommended to use an autoloader function or register an autoloader using the `spl_autoload_register` function.

Here's an example of how you might use `spl_autoload_register`:

```php
<?php

// important rule that if class name is 'ashik' then it file name also be 'ashik.php'
// Autoloader function
function myAutoloader($className) {
    $classFile = __DIR__ . '/' . $className . '.php';
    if (file_exists($classFile)) {
        include $classFile;
    }
}

// Register the autoloader function
spl_autoload_register('myAutoloader'); // when try to creat any object this function automaticaly call to load class file

// Now, when you instantiate a class, PHP will attempt to load the class file using the autoloader
$obj = new MyClass();
?>

```

In this example:

- The `myAutoloader` function is a simple autoloader that includes the class file if it exists.
- `spl_autoload_register` is used to register the autoloader function.

It's important to note that using Composer's autoloading functionality is a more modern and widely adopted approach in PHP projects. If you're starting a new project or working with an existing one, consider using Composer for autoloading.
