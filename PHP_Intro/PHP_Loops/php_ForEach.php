<!DOCTYPE html>
<html>

<body>

    <?php
    // pake array  
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        echo "$x <br>";
    }

    // ini pake array asosiatif
    $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($members as $x => $y) {
        echo "$x : $y <br>";
    }

    // nah dibawah ini contoh perulangan foreach di dalam object
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
    }

    $myCar = new Car("red", "Volvo");

    foreach ($myCar as $x => $y) {
        echo "$x: $y<br>";
    }

    //   pake break statement
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue")
            break;
        echo "$x <br>";
    }

    // pake continue statements
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue")
            continue;
        echo "$x <br>";
    }

    // Foreach Byref
    // When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:
    
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue")
            $x = "pink";
    }

    var_dump($colors);
    
    ?>

</body>

</html>