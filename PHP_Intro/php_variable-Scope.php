<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x </p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";


function myTest2() {
    $y = 10; // local scope
    echo "<p>Variable x inside function is: $y</p>";
  } 
  myTest();
  
  // using y outside the function will generate an error
  echo "<p>Variable x outside function is: $y</p>";


  // function Test 3
$a = 5;
$b = 10;
function myTest3() {
  global $a, $b;
  $c = $a + $b;
} 
myTest();  // run function
echo $c; // output the new value for variable $c


//function tes 4
$d = 5;
$e = 10;

function myTest4() {
  $GLOBALS['e'] = $GLOBALS['d'] + $GLOBALS['e'];
} 

myTest4();
echo $e; //outputs 15


//function tes 5
function myTest5() {
    static $f = 0;
    echo $f;
    $f++;
  }
  
  myTest5();
  echo "<br>";
  myTest5();
  echo "<br>";
  myTest5();

?>

</body>
</html>
