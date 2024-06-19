<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$cars = array("Volvo", "BMW", "Toyota"); 
var_dump($cars);
echo $cars[0]; //akses indeks ke 0 array
$cars[1] = "Ford"; // ganti indeks ke 1 jadi ford
var_dump($cars);

// perulangan di array pake foreach
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}

// index number
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

array_push($cars, "Ford"); //pake array_push buat nambahin item baru
var_dump($cars);

?>

</pre>
</body>
</html>
