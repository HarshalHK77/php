<!-- 
Problem Stmt5 : Demonstrate the All types of assignment operators (= and all free Hand Assignment)
Basic Assignment (=)
Addition Assignment (+=)
Subtraction Assignment (-=)
Multiplication Assignment (*=)
Division Assignment (/=)
Modulus Assignment (%=) -->

<?php
    echo"<h2>Assignment Operators</h2>";
    $x=10;
    echo"The Basic assignment x = " .$x ."<br>";

    $x +=5;
    echo"The Addition assignment x +=5; x = " .$x ."<br>";

    $x -=2;
    echo"The Subtraction assignment x -=2; x = " .$x ."<br>";

    $x *=5;
    echo"The Multiplication assignment x *= 4; x = " .$x ."<br>";

    $x /=13;
    echo"The Division assignment x /=5; x = " .$x ."<br>";

    $x %=3;
    echo"The Modulus assignment x %=5; x = " .$x ."<br>";

?>