# here i demonstrate regqular expresion quantifier

1. \* zero or more occurence
2. \+ one or more occurence
3. ? zero or one occurence
4. {3} exact number occurence
5. {3,5} minimum , maximum number occurence
6. {3,} minimum to infinite occurence

উপরের সবগুলি হলো repeatation quantifier   এবং কারলি ব্রেসেস ওয়ালা quantifier  হলো limiting repeatation quantifier

If you want to match Bengali letters and numbers using Unicode in PHP, you can use the following regular expression:

```php
<?php
$pattern = '/[\p{Bengali}\p{Nd}]+/u'; // Matches Bengali letters and numbers
$string = 'বাংলা ১২৩';

preg_match_all($pattern, $string, $matches);

print_r($matches[0]);
?>
```

In this example, `[\p{Bengali}\p{Nd}]+` is the regular expression pattern:

- `[\p{Bengali}]` matches any Bengali letter.
- `\p{Nd}` matches any decimal digit.
- The `+` quantifier matches one or more occurrences of the previous character class.

The `u` modifier is used at the end of the pattern to enable Unicode mode. The input string contains Bengali letters and numbers. The `preg_match_all` function with the Unicode modifier will correctly match Bengali letters and numbers in the string.

Make sure your PHP installation has support for Unicode and is configured to use UTF-8 encoding for strings

## Unicode property escape

In regular expressions, the `\p` is a Unicode property escape. Unicode property escapes allow you to match characters based on their Unicode properties, such as script, general category, or other characteristics.

Here's a breakdown of `\p`:

- `\p{}`: The curly braces are used to enclose the Unicode property expression.

For example:

- `\p{Script=Bengali}`: Matches any character from the Bengali script in many language except php.
`\p{Bengali}`: Matches any character from the Bengali script in  php regular expression.
- `\p{N}`: Matches any numeric character.

So, when you see `\p{}`, it's an indication that you are using a Unicode property escape to define a character class based on some Unicode property. The specific property is specified within the curly braces. This feature is often used with the `u` flag in regular expressions to enable Unicode mode.

## example in php

```ini
<?php
$pattern = '/[\p{Bengali}\p{Nd}]+/u'; // Matches Bengali letters and numbers
$string = 'বাংলা ১২৩';

preg_match_all($pattern, $string, $matches);

print_r($matches[0]);
?>
```

In this example, `[\p{Bengali}\p{Nd}]+` is the regular expression pattern:

- `[\p{Bengali}]` matches any Bengali letter.
- `\p{Nd}` matches any decimal digit.
- The `+` quantifier matches one or more occurrences of the previous character class.

The `u` modifier is used at the end of the pattern to enable Unicode mode. The input string contains Bengali letters and numbers. The `preg_match_all` function with the Unicode modifier will correctly match Bengali letters and numbers in the string.

Make sure your PHP installation has support for Unicode and is configured to use UTF-8 encoding for strings.

## greedy match and lazy match

নিচে দেখানো হলো greedy match and lazy match এর ম্যাচ করার নিয়ম

```php

<?php

$string = '<div> the name <br> of our national team <div>  and our main <h>';

$pattern = '/<.*>/'; // greedy match example

preg_match($pattern, $string, $matches); // output matched <div> the name <br> of our national team <div>  and our main <h>

print_r($matches);

$pattern2 = '/<.*?>/'; // lazy match example

preg_match_all($pattern2, $string, $matches2);  // output only these  [0] => <div> [1] => <br> [2] => <div> [3] => <h>

print_r($matches2);
?>
```
