<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<h1><?php echo "Hello World."?></h1>

<?php
    $color = "white";

    echo "My BMW Z4 is: ".$color. "<br>";
    echo "My house is: ".$color. "<br>";
    echo "My company logo is: ". $color. "<br>";

    //Single line comment in PHP
    # another way of commenting single line in PHP
    /*
        Multiline 
        comment 
        in 
        PHP
    */

    // You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;

?>

</body>
</html>