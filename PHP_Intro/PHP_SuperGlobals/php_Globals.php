<!DOCTYPE html>
<html>

<body>
    <?php
    $x = 75;

    function myfunction()
    {
        echo $GLOBALS['x']; //atau bisa
        global $x;
        echo $x;
    }

    myfunction()
        ?>

</body>

</html>