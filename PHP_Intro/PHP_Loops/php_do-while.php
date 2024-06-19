<!DOCTYPE html>
<html>

<body>

    <?php
    //  Print $i sejauh $i itu kurang dari 6
    $i = 1;

    do {
        echo $i;
        $i++;
    } while ($i < 6);

    // set $i=8, lalu print $i sebanyak $i kurang dari 6
    $i = 8;

    do {
        echo $i;
        $i++;
    } while ($i < 6);
    // As we can see, the code is executed once, even if the condition is never true.
    
    // With the break statement we can stop the loop even if the condition is still true:
    $i = 1;

    do {
        if ($i == 3)
            break;
        echo $i;
        $i++;
    } while ($i < 6);

    // With the continue statement we can stop the current iteration, and continue with the next:
    $i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
    ?>

</body>

</html>