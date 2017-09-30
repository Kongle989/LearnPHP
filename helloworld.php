<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Page</title>
</head>
<body>

<h1>My first PHP page</h1>

<?php // Start php script
// Comment type one

# Comment type two

/*
 *  Block Comment
 */

// Inbetween line comment
$x = 5 /* + 15 */ + 5;
// Variables start with a $ (dollar sign) followed by variable name
echo $x;

echo "<br>Hello World!<br>";

$txt  = "coding";
echo "I love $txt!<br>"; // PHP var can be used inline without escaping


$a = 5;
$b = 10;

function myTest() {
    // Use global keyword to access global var inside functions
    global $a, $b;
    $b = $a + $b;
}

myTest();
echo $b; // Outputs 15

function myTest2() {
    // Static keyword prevents var inside
    // function from being deleted after function end
    static $c = 0;
    echo "<br>$c";
    $c++;
}

myTest2();
myTest2();
myTest2();

$txt1 = "<br>I ";
$txt2 = "learned";
$txt3 = " PHP!";

// A "." (period) indicates concatenation
echo $txt1 . $txt2 . $txt3;

// Almost same as echo
print $txt1 . $txt2 . $txt3;

/* PHP data types
 * String - represented inside quotes "string"
 * Integer - whole numbers negative or postive
 * Float aka double - integers with decimal point
 * Boolean - either true or false
 * Array - array() separated by commas
 * Object - declare using class keyword
 *          class myObject {
 *              function item() {
 *                  $this->color = "red";
 *              }
 *          }
 *          create using new keyword
 *          $truck = new myObject();
 *          echo $truck->color;
 *          truck color will be red
 * NULL - null is null, null is nothing, null is NOT zero
 * var_dump() - returns data type and value
 */

/* STRING
 * strlen() - returns string length
 * str_word_count() - returns number of words...duh
 * strrev() - reverses a string, in case you're drunk
 *            and the cop wants you to say the alphabet backwards
 * strpos() - search for a matching text in a string
 *            first arg is string
 *            second arg is text to match
 *            returns character position of first match else false
 *            first position in a string is 0 not 1
 * str_replace() - replaces characters in a string
 *                 first arg chars to replace
 *                 second arg replace with this
 *                 third arg string to do the replacing
 *
 */









?><!-- End php script-->


</body>

</html>