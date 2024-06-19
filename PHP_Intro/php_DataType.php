<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 5; //integer
    $a = "Hello world!"; //string
    $b = 'Hello fito'; //string
    $c = 5985; //integer
    $d = 10.365; //float
    $e = true; //boolean
    $cars = array("Volvo", "BMW", "Toyota"); //array
    $f = "Hello world!"; //string
    $f = null; //null type
    
    var_dump($x);
    echo "<br>";
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    var_dump($cars);
    echo "<br>";
    var_dump($f);


    //PHP object using class
    //Classes and objects are the two main aspects of object-oriented programming
    
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("red", "Volvo");
    var_dump($myCar);


    //change Data Type
    $g = 5;
    var_dump($g);

    echo "<br>";

    $g = "Hello";
    var_dump($g);
    echo "<br>";
    
    // if we want to change the data type of an existing variable but not changing the value we can use :
    $x = (string) $x;
    var_dump($x);
    ?>
</body>
</html>