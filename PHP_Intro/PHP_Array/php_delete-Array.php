<!DOCTYPE html>
<html>

<body>
    <pre>

<?php
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1); //kita bisa menghapus item di dalam array menggunakan arary_splice()
var_dump($cars);
unset($cars[1]);
array_splice($cars, 1, 2); //berfungsi untuk menghapus multiple array items dengan mencantumkan index yang ingin dihapus

// menghapus item array assosiatif dengan me-unset key nya
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);

// menghapus item di array assosiatif dengan menggunakan array_diff()
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);

// menghapus item terakhir di dalam array menggunakan array_pop()
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);

// menghapus item pertama dalam array menggunakan array_shift()
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);
?>  

</pre>
</body>

</html>