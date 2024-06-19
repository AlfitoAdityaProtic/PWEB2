<!DOCTYPE html>
<html>

<body>

    <?php
    $x = "Hello World!<br>";
    echo strtoupper($x); //capslock semua
    echo strtolower($x); //tulisannya kecil semua
    echo str_replace("World", "alfito", $x); //ini buat ganti kata di dalam variabel x nya.
    //reverse string (outputnya bikin pusing wkwkwkk)
    echo strrev($x);

    //ngilangin spasi di depan kalimat
    echo trim($x); //contohnya ada di html dibawah ini:
    ?>
    <br>
    <p>The whitespaces are invisible in plain HTML,<br>
        but check out the difference in two input fields:</p>
    <?php
    echo "<input value='" . $x . "'>";
    echo "<br>";
    echo "<input value='" . trim($x) . "'>";

    // convert string into array
    // PHP explode() function splits a string into an array.
    $y = explode("", $x);

    // buat liat hasilnya kita pake fungsi print_r()
    print_r($y);
    ?>

</body>
</html>