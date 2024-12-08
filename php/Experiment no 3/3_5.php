<!-- Problem Stmt5: Stack functionality of Array (Last in First out Manner) -->

<?php
    // 1. Create an array with 10 numbers
    $stack = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    // Display the original array
    echo "Original array:<br>";
    print_r($stack);
    echo "<br><br>";
    
    // 2. Add an element to the end of the array using array_push()
    array_push($stack, 11);
    echo "Array after adding an element at the end using array_push():<br>";
    print_r($stack);
    echo "<br><br>";
    
    // 3. Remove the last element from the array using array_pop()
    $removedElement = array_pop($stack);
    echo "Removed element: $removedElement<br>";
    echo "Array after removing the last element using array_pop():<br>";
    print_r($stack);
    echo "<br><br>";
    
?>