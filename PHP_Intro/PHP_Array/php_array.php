<!DOCTYPE html>
<html>
<body>

<?php
// array function
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

// array items
// function example:
function myFunction() {
    echo "This text comes from a function";
  }
  
  // create array:
  $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());
  
  // calling the function from the array item:
  $myArr[3]();
?>

</body>
</html>
