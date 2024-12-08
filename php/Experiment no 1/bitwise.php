<!-- Problem Stmt7 : Perform the bitwise operations on two numbers. 
( &, |, ^, ~, <<, >>) -->

<?php
    $x = 4;  // 0100
    $y = 2;  // 0010

    $and = $x & $y;
    echo "Bitwise AND :".$and ."<br>";   //0000

    $or = $x | $y;
    echo "Bitwise OR :".$or ."<br>";     //0110

    $xor = $x ^ $y;
    echo "Bitwise XOR :".$xor ."<br>";   //0110

    $not = ~$x;
    echo "Bitwise NOT :".$not ."<br>";   //1011

    $leftShift = $x << 1;
    echo "Bitwise Left Shift :".$leftShift ."<br>";      //1000
  
    $rightShift = $x >> 1; 
    echo "Bitwise Right Shift :".$rightShift ."<br>";    //0010

?>

