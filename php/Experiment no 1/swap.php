<!-- Problem Stmt6 : Write PHP code to swap two numbers -->

<?php
    $x=10;
    $y= 20;
    echo"The numbers are $x and $y <br>";

    $temp = $x;
    $x = $y;
    $y = $temp;
    echo"The swapped numbers are $x and $y";
?>