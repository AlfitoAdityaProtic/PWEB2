<!DOCTYPE html>
<html>

<body>

    <h1>The <> Operator</h1>

    <?php
    // Compare two variables and write a message if they don't have the same value
    $x = 100;
    $y = 50;

    if ($x <> $y) {
        echo "$x is not equal to $y";
    }

    // Compare two variables to check if they have the same value.
    $x = 100;
    $y = 100;
    if ($x == $y) {
        echo "$x is equal to $y";
    }

    // The identical operator (===) checks the value and the data type, unlike the equal operator (==) that checks only the value.
    $x = 100;
    $y = 100;

    if ($x === $y) {
        echo "$x is identical to $y";
    }

    // Logical Operators
// To check more than one condition, we can use logical operators, like the && operator:
    
    $a = 200;
    $b = 33;
    $c = 500;

    if ($a > $b && $a < $c) {
        echo "Both conditions are true";
    }

    // Write a message if one of the conditions are true, bot not if both conditions are true.
    $x = 100;
    $y = 50;

    if ($x == 100 xor $y == 80) {
        echo "Hello world!";
    }

    // Write a message if the condition is NOT true
    $x = 100;

    if (!($x == 90)) {
        echo "Hello world!";
    }

    // True if either condition is true
    $a = 5;

    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
        echo "$a is a number between 2 and 7";
    }
    ?>

</body>

</html>