<!DOCTYPE html>
<html>

<body>

    <?php
    //string
    echo "Hello <br>";
    print "Hello <br>";

    //Double Quotes
    $x = "John";
    echo "Hello $x";

    //single Quotes
    echo 'Hello $x';

    // string length
// The PHP strlen() function returns the length of a string.
    echo strlen("Hello world!");

    // Word Count 
// The PHP str_word_count() function counts the number of words in a string.
    echo str_word_count("Hello world!"); //ini ngitung jumlah kata yaaaaaa, try to speak in english bro
    
    // Search For Text Within a String
// The PHP strpos() function searches for a specific text within a string.
/* If a match is found, the function returns the character position of the first match. 
If no match is found, it will return FALSE.*/
    echo strpos("Hello world!", "world");

    ?>

</body>

</html>