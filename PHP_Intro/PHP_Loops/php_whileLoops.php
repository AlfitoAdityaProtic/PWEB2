<!DOCTYPE html>
<html>

<body>

    <?php
    $i = 1;

    // The while loop executes a block of code as long as the specified condition is true.
    while ($i < 6) {
        echo $i . "<br>";
        $i++;
    }

    // With the break statement we can stop the loop even if the condition is still true:
    while ($i < 6) {
        if ($i == 3)
            break;
        echo $i;
        $i++;
    }

    // With the continue statement we can stop the current iteration, and continue with the next:
    $i = 0;
    while ($i < 6) {
        $i++;
        if ($i == 3)
            continue;
        echo $i;
    }

    // The while loop syntax can also be written with the endwhile statement like this
    $i = 1;
    while ($i < 6):
        echo $i;
        $i++;
    endwhile;

    // If we want the while loop count to 100, but only by each 10, we can increase the counter by 10 instead 1 in each iteration:
        $i = 0;
        while ($i < 100) {
          $i+=10;
          echo $i . "<br>";
        }
    
    ?>

</body>

</html>