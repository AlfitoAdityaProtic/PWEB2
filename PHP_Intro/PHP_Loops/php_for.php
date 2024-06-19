<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

// ini pake break statement jadi kalo udah di kasih batesan ya bakal berhenti di indeks itu
for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
  }

// ini pake continue statment dimana looping bakal berhenti di indeks yang kita batasi dan bakal lanjut ke looping selanjutnya
for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
  }
  
?>  

</body>
</html>
