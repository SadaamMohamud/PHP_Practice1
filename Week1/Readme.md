# PHP Programming Screenshots

This README explains all the PHP programming screenshots in the folder in simple English.  
Each screenshot is numbered in the same order as the files.

---

## Screenshot 1 — `PHP Tags.png`

### What this screenshot shows
This screenshot shows the basic PHP tags used to start and end PHP code.

### Easy English explanation
- `<?php` tells the server that PHP code starts here.
- `?>` tells the server that the PHP code ends here.
- The screenshot also shows an HTML page structure around the PHP code.
- PHP code is normally written between these PHP tags.

### Output
There is **no visible output** from this screenshot because it only demonstrates the PHP tags. The browser displays an empty page unless other HTML or PHP output is added.

---

## Screenshot 2 — `Echo.png`

### What this screenshot shows
This screenshot demonstrates the PHP `echo` statement.

### Easy English explanation
- `echo` is used to display information on a webpage.
- The text is placed inside quotation marks.
- `<h1>` is an HTML heading tag, so the text appears as a large heading.

### Code shown
```php
<?php
echo "<h1>Welcome to php and my sql</h1>";
?>
```

### Output
The browser displays:

**Welcome to php and my sql**

---

## Screenshot 3 — `print.png`

### What this screenshot shows
This screenshot demonstrates the PHP `print` statement.

### Easy English explanation
- `print` is another PHP statement used to display information.
- The text is written inside quotation marks.
- The `<h1>` tag makes the text a large heading.

### Code shown
```php
<?php
print "<h1>Welcome to php and my sql</h1>";
?>
```

### Output
The browser displays:

**Welcome to php and my sql**

---

## Screenshot 4 — `echo single and double Quatos.png`

### What this screenshot shows
This screenshot demonstrates using `echo` with single quotes and double quotes.

### Easy English explanation
- PHP strings can be written using single quotes (`' '`) or double quotes (`" "`).
- The screenshot uses `echo` to display the same heading in both examples.
- Both examples display text on the webpage.

### Code shown
```php
<?php
echo '<h1>Welcome to php and my sql</h1>';

echo "<h1>Welcome to php and my sql</h1>";
?>
```

### Output
The browser displays the heading **twice**:

**Welcome to php and my sql**

**Welcome to php and my sql**

---

## Screenshot 5 — `print single and double quatos.png`

### What this screenshot shows
This screenshot demonstrates using `print` with single quotes and double quotes.

### Easy English explanation
- `print` can display a string written with single quotes.
- `print` can also display a string written with double quotes.
- Both examples produce the same text.

### Code shown
```php
<?php
print '<h1>Welcome to php and my sql</h1>';

print "<h1>Welcome to php and my sql</h1>";
?>
```

### Output
The browser displays the heading **twice**:

**Welcome to php and my sql**

**Welcome to php and my sql**

---

## Screenshot 6 — `echo with parenthesis.png`

### What this screenshot shows
This screenshot demonstrates using `echo` with parentheses.

### Easy English explanation
- `echo` can be written with parentheses around the value.
- The parentheses contain the text that will be displayed.
- The text is displayed as an `<h1>` heading.

### Code shown
```php
<?php
echo ("<h1>Welcome to php and my sql</h1>");
?>
```

### Output
The browser displays:

**Welcome to php and my sql**

---

## Screenshot 7 — `print with parenthesis.png`

### What this screenshot shows
This screenshot demonstrates using `print` with parentheses.

### Easy English explanation
- `print` can be written with parentheses around the value.
- The text inside the parentheses is displayed on the webpage.
- The `<h1>` tag makes the text a large heading.

### Code shown
```php
<?php
print ("<h1>Welcome to php and my sql</h1>");
?>
```

### Output
The browser displays:

**Welcome to php and my sql**

---

## Screenshot 8 — `echo with Multiple Values.png`

### What this screenshot shows
This screenshot demonstrates using `echo` with multiple values.

### Easy English explanation
- `echo` can display more than one value.
- The values can be separated with commas.
- In this example, `PHP` and `MY SQL` are displayed together inside an `<h1>` heading.

### Code shown
```php
<?php
echo "<h1>PHP ", "MY SQL</h1>";
?>
```

### Output
The browser displays:

**PHP MY SQL**

---

## Screenshot 9 — `print with multiple values.png`

### What this screenshot shows
This screenshot demonstrates displaying multiple pieces of text with `print`.

### Easy English explanation
- `print` displays one expression.
- The screenshot joins two text strings using the dot (`.`) concatenation operator.
- The two strings become one string before `print` displays it.

### Code shown
```php
<?php
print "<h1>PHP " . "MY SQL</h1>";
?>
```

### Output
The browser displays:

**PHP MY SQL**

---

## Screenshot 10 — `echo and print strlen.png`

### What this screenshot shows
This screenshot demonstrates the `strlen()` function with both `echo` and `print`.

### Easy English explanation
- `$my_str` stores the text `Welcome to php republic`.
- `strlen()` counts the number of characters in a string.
- `echo` displays the result of `strlen()`.
- `print` also displays the result of `strlen()`.
- The string contains **23 characters**, including spaces.

### Code shown
```php
<?php
$my_str = 'Welcome to php republic';

echo strlen($my_str);
print strlen($my_str);
?>
```

### Output
Because both results are printed one after another, the output is:

```text
2323
```

Each `23` is the character count of the string.

---

## Screenshot 11 — `str_word_count using echo and print.png`

### What this screenshot shows
This screenshot demonstrates the `str_word_count()` function with `echo` and `print`.

### Easy English explanation
- `$my_str` stores the text `welcome to php republic`.
- `str_word_count()` counts the number of words in the string.
- The sentence has **4 words**: `welcome`, `to`, `php`, and `republic`.
- `echo` displays the result.
- `print` displays the result again.

### Code shown
```php
<?php
$my_str = 'welcome to php republic';

echo str_word_count($my_str);
print str_word_count($my_str);
?>
```

### Output
The output is:

```text
44
```

Each `4` means that PHP counted four words.

---

## Screenshot 12 — `Variable with Using Echo.png`

### What this screenshot shows
This screenshot demonstrates creating a variable and displaying it with `echo`.

### Easy English explanation
- `$Fullname` is a PHP variable.
- The variable stores the name `Sadaam Mohamud Abdullahi`.
- `echo` displays the value stored in the variable.
- The value is placed inside an HTML `<h1>` heading.

### Code shown
```php
<?php
$Fullname = "Sadaam Mohamud Abdullahi";
echo "<h1>My full Name is $Fullname</h1>";
?>
```

### Output
The browser displays:

**My full Name is Sadaam Mohamud Abdullahi**

---

## Screenshot 13 — `Variable with Using Print.png`

### What this screenshot shows
This screenshot demonstrates creating a variable and displaying it with `print`.

### Easy English explanation
- `$Fullname` is a PHP variable.
- The variable stores the name `Sadaam Mohamud Abdullahi`.
- `print` displays the value stored in the variable.
- The value is included in an HTML `<h1>` heading.

### Code shown
```php
<?php
$Fullname = "Sadaam Mohamud Abdullahi";
print "<h1>My full Name is $Fullname</h1>";
?>
```

### Output
The browser displays:

**My full Name is Sadaam Mohamud Abdullahi**

---

# Summary

These screenshots introduce basic PHP concepts:

1. **PHP Tags** — starting and ending PHP code.
2. **echo** — displaying information.
3. **print** — displaying information.
4. **Single and double quotes** — writing PHP strings.
5. **Parentheses** — using parentheses with `echo` and `print`.
6. **Multiple values** — displaying or joining more than one piece of text.
7. **Variables** — storing information such as a name.
8. **`strlen()`** — counting characters in a string.
9. **`str_word_count()`** — counting words in a string.

These examples provide a basic introduction to displaying text, using variables, and working with strings in PHP.
