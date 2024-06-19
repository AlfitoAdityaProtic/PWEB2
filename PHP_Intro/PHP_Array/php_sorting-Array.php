<!DOCTYPE html>
<html>

<body>

    <?php

    // mengurutkan array dari yang terkecil (ascending) dengan menggunakan sort()
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);

    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    // mengurutkan item dalam array dari yang terbesar ke yang ter kecil(descending) menggunakan rsort()
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);

    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    // mengurutkan item dalam array assosiatif dari yang terkecil ke yang terbesar(ascending) berdasarkan value nya menggunakan asort()
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    asort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // mengurutkan item dalam array assosiatif dari yang terkecil ke yang terbesar(ascending) berdasarkan key nya saja menggunakan ksort()
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    ksort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // mengurutkan item dalam array assosiatif dari yang terbesar ke yang terkecil(descending) berdasarkan value nya menggunakan arsort()
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    arsort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // mengurutkan item dalam array assosiatif dari yang terbesar ke yang terkecil(descending) berdasarkan key nya menggunakan krsort()
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    krsort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    ?>

</body>

</html>