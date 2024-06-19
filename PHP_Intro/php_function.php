<!DOCTYPE html>
<html>

<body>

    <?php
    // function default argument value
    function setHeight($minheight = 50)
    {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    // function argument
    function familyName($fname, $year)
    {
        echo "$fname Refsnes. Born in $year <br>";
    }

    familyName("Hege", "1975");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983");

    // function returning values
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);

    // passing arguments by reference
    function add_five(&$value)
    {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;

    // variable number of arguments
    // By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.
    
    // The variadic function argument becomes an array.
    function sumMyNumbers(...$x)
    {
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }
        return $n;
    }

    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a;
    ?>

</body>

</html>