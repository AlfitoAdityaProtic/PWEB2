<!DOCTYPE html>
<html>
<body>

<?php
// slicing
/*kita bisa manggil value dari variabel yang kita mau sesuai keinginan kita dan bacanya dari depan ke belakang, 
x itu variabel yang dipanggil, angka 6 itu kata ke 6 yang diambil dari variabel, angka 5 itu jumlah kata(panjang karakter) yang di ambil*/
$x = "Hello World!";
echo substr($x, 6, 5);
echo substr($x, 6);
echo substr($x, -5, 3); // bedanya cuma ini ngambil datanya dari belakang ke depan 

// Negative Length
// Use negative length to specify how many characters to omit, starting from the end of the string
$y = "Hi, how are you?";
echo substr($y, 5, -3); 
/* dari kata "Hi, how are you?" kita mendaapatkan karakter dari index ke 5 dan
berakhir akan mendapatkan 3 karakter yang pas  */
?> 

</body>
</html>
