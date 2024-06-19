<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // $x is an integer
$y = "John"; // $y is an string

echo $x;
echo "<br>";
echo $y;

$txt = "W3Schools.com<br>";
echo "I love $txt!<br>";

$txt2 = "W3Schools.com";
echo "I love " . $txt2 . "!<br>";

$a = 5;
$b = 4;
echo $a + $b . "<br>";

var_dump($x); // To get the data type of a variable, use the var_dump() function.

var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

$c = $d = $e = "Fruit";

echo $c;
echo $d;
echo $e;
?>

</body>
</html>