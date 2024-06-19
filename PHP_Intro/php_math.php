<!DOCTYPE html>
<html>
<body>

<?php
echo(pi()."<br>"); //pi
echo(min(0, 150, 30, 20, -8, -200) . "<br>");//min
echo(max(0, 150, 30, 20, -8, -200));//max
echo(abs(-6.7)); //mengembalikan nilai positif value angka

//bentuk akar pakenya sqrt()
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9));

// The round() function rounds a floating-point number to its nearest integer:
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));

// kalo mau dapet angka random di php pake :
echo(rand() . "<br>");

?>

</body>
</html>
