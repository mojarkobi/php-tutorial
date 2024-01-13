# modifier indetails for regex

g = means global search
i = means case insensitive
m = multiline
s = single line
u = unicode mode on
U = ungreedy mode

In PHP, regular expression modifiers are appended after the closing delimiter of the regular expression and modify how the pattern is interpreted. Here's a list of common modifiers in PHP and their usage:

1. **i (Case-Insensitive):**

    - Usage: `'/pattern/i'`
    - Example: `preg_match('/hello/i', 'Hello World')` matches "Hello" case-insensitively.
2. **m (Multiline):**

    - Usage: `'/pattern/m'`
    - Example: `preg_match('/^start/m', "start\nnew line")` matches "start" at the beginning of each line.
3. **s (Dotall):**

    - Usage: `'/pattern/s'`
    - Example: `preg_match('/.*/s', 'This is\na multiline string')` matches any character including newline.
4. **u (Unicode):**

    - Usage: `'/pattern/u'`
    - Example: `preg_match('/\p{Greek}/u', 'Σ')` matches Greek characters using Unicode properties.
5. **U (Ungreedy):**

    - Usage: `'/pattern/U'`
    - Example: `preg_match('/(a.*?b)/U', 'aXbXb')` matches the shortest string between 'a' and 'b'.
6. **x (Extended):**

    - Usage: `'/pattern/x'`
    - Example: `preg_match('/ \d+ | [\w.-]+ @ [\w.-]+ /x', 'john.doe@example.com')` allows whitespace and comments in the pattern.
7. **A (Anchors match after newline):**

    - Usage: `'/pattern/A'`
    - Example: `preg_match('/^start/A', "start\nnew line")` matches "start" only at the beginning of the string.
8. **D (Dollar matches after newline):**

    - Usage: `'/pattern/D'`
    - Example: `preg_match('/end$/D', "end\nnew line")` matches "end" only at the end of the string.
9. **u (ungreedy):**

    - Usage: `'/pattern/u'`
    - Example: `preg_match('/(a.*?b)/U', 'aXbXb')` matches the shortest string between 'a' and 'b'.
10. **i (case-insensitive):**

    - Usage: `'/pattern/i'`
    - Example: `preg_match('/hello/i', 'Hello World')` matches "Hello" case-insensitively.

These modifiers are appended at the end of the regular expression pattern and alter the behavior of the pattern matching. The `u` modifier is especially important for Unicode support, while others provide additional flexibility in pattern matching.
