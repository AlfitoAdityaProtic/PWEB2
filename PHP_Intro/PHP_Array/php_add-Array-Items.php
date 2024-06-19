<!DOCTYPE html>
<html>

<body>

<pre>
<?php
// tambah array item
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

//Output the array:
var_dump($fruits);

// ini nambahin di array assosiatif
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

//Output the array:
var_dump($cars);

// ini buat nambahin multiple array items pake array_push()
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

// tambah banyak item ke array assosiatif pake += operator
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
?>
</pre>

</body>

</html>