<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo $car["model"]; //ini buat akses array assosiatif
$car["year"] = 2024; // ini buat ganti value array assosiatif
var_dump($car);

// untuk melakukan perulangan dan print value dari array assosiatif bisa pake foreach
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>

</pre>
</body>
</html>
