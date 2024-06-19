<!DOCTYPE html>
<html>

<body>
    <?php
    // define syntax : define(name, value, case-insensitive);
    
    // case-sensitive constant name 
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;

    // case-insensitive constant name
    define("GREETING", "Welcome to W3Schools.com!", true);
    echo greeting;

    // we can also create a constant by using the const keyword.
    const MYCAR = "Volvo";
    echo MYCAR;

    //PHP Constant Arrays
    // From PHP7, you can create an Array constant using the define() function.
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];

    // Constants are Global
    // Constants are automatically global and can be used across the entire script.
    define("GREETING", "Welcome to W3Schools.com!");

    function myTest()
    {
        echo GREETING;
    }

    myTest();
    ?>
</body>

</html>