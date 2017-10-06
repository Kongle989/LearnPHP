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

$txt = "coding";
echo "I love $txt!<br>"; // PHP var can be used inline without escaping


$a = 5;
$b = 10;

function myTest()
{
    // Use global keyword to access global var inside functions
    global $a, $b;
    $b = $a + $b;
}

myTest();
echo $b; // Outputs 15

function myTest2()
{
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
 */

/* CONSTANT
 * create using define() function
 * first arg is name, no dollar sign
 * second arg is value
 * constant is not case sensitive
 * a constant is always global
 */

/* ARITHMETIC OPERATORS
 * + add
 * - subtract
 * * multiply
 * / divide
 * % modulus
 * ** exponent
*/

/* ASSIGNMENT OPERATORS
 * = assign right to left
 * += add right to left
 * -= subtract right from left
 * *= multiply right to left
 * /= divide right from left
 * %= modulus right from left
 */

/* COMPARISON OPERATORS
 * == returns true if equal
 * === returns true if equal and same type
 * != or <> returns true if not equal, false if equals
 * !== returns true if not equal or equal but not same type
 * > returns true if greater than
 * < returns true if less than
 * >= returns true if greater than or equal to
 * <= returns true if less than or equal to
 */

/* INCREMENT / DECREMENT OPERATORS
 * ++$x increments by one then returns
 * $x++ returns then increments by one
 * --$x decrements by one then returns
 * $x-- returns then decrements by one
 */

/* LOGICAL OPERATORS
 * and && - true if both are true
 * or || - true if either or is true
 * xor - true if either or is true but not both
 * ! - true if not true
 */

/* STRING OPERATORS
 * . concatenation
 * .= concatenate and assign
 */

/* ARRAY OPERATORS
 * + combine two arrays
 * === returns true if same value same type and same order
 */

// IF ELSE IF ELSE STATEMENTS
$t = date("H"); // Current time (hour)

if ($t < "20") {
    echo "<br>Have a good day!";
} else {
    echo "<br>Have a good night!";
}

if ($t < "10") {
    echo "<br>Have a good morning!";
} elseif ($t < "20") {
    echo "<br>Have a good day!";
} else {
    echo "<br>Have a good night!";
}

// SWITCH STATEMENT
$favcolor = "yellow";

switch ($favcolor) {
    case "red":
        echo "<br>Your fav color is red!";
        break;
    case "blue":
        echo "<br>Your fav color is blue!";
        break;
    case "yellow":
        echo "<br>Your fav color is yellow!";
        break;
    case "green":
        echo "<br>Your fav color is green!";
        break;
    default:
        echo "<br>You has no favorite color!";
}

// WHILE DO WHILE LOOP
$w = 1;

while ($w <= 5) {
    echo "<br>Num is $w";
    $w++;
}

$d = 1;

do {
    echo "<br>The num is $d";
    $d++;
} while ($d <= 5);


// FOR FOREACH LOOP
for ($f = 0; $f <= 5; $f++) {
    echo "<br>The number is $f";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "<br>$value";
}

// User defined functions
function writeMsg()
{
    echo "<br>Hello World!";
}

writeMsg();

// Function with arguments
function familyName($fname)
{
    echo "<br>$fname Refsnes.";
}

familyName("Ding");
familyName("Dong");

function familyName2($fname, $year)
{
    echo "<br>$fname Refsnes. Born in $year";
}

familyName2("Le", "1988");

// Default Argument
function setHeight($minheight = 50)
{
    echo "<br>The height is: $minheight";
}

setHeight(30);
setHeight();

// Function Return
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "<br>5 + 10 = " . sum(5, 10);

// Array
$cars = array("Volvo", "BMW", "Honda");
echo "<br>I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// count() return the length of an array
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo "<br>" . $cars[$x];
}

// Associative Array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// or
$age['Sam'] = "15";
$age['Jess'] = "18";
$age['John'] = "25";

echo "<br>" . count($age);
echo "<br>" . $age['Peter'];
echo "<br>" . $age['Jess'];

// Use foreach loop to go through associative array
foreach ($age as $x => $x_value) {
    echo "<br>Key: $x, Value: $x_value";
}

/* ARRAY SORT FUNCTION
 * sort() - ascending order
 * rsort() - decending order
 * asort() - sort associative array ascending base on value
 * ksort() - sort associative array ascending base on key
 * arsort() - sort associative array descending base on value
 * krsort() - sort associative array descensing base on key
 */


?><!-- End php script-->


</body>

</html>