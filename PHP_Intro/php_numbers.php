<!DOCTYPE html>
<html>
<body>

<?php
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";

// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));

// Check if the type of a variable is float 
$y = 10.365;
var_dump(is_float($y));

// Check if a numeric value is finite or infinite 
$z = 1.9e411;
var_dump($z);

// PHP NaN : pake fungsi is_nan()
// NaN stands for not a number.
// NaN is used for impossible mathematical operations.
// Invalid calculation will return a NaN value
$d = acos(8);
var_dump($d);
var_dump(is_nan($d));

// PHP Numerical Strings
/*fungsi is_numeric() dalam php bisa digunakan untuk mencari variabel yang bertipe data numeric.
fungsi akan me return true jika angka atau numerik string. selain itu false*/
// Check if the variable is numeric   
$d = 5985;
var_dump(is_numeric($d));

echo "<br>";

$e = "5985";
var_dump(is_numeric($e));

echo "<br>";

$f = "59.85" + 100;
var_dump(is_numeric($f));

echo "<br>";

$g = "Hello";
var_dump(is_numeric($g));

// PHP Casting Strings and Floats to Integers
// kadang kita perlu untuk mengubah value tipe data 1 ke tipe data lainnya.
// biasanya pake (int),(integer),intval().
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?> 

</body>
</html>
