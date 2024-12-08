<!-- Problem Stmt4: Queue functionality of Array (First in-first out manner) -->
<?php
    // 1. Create an array with 10 numbers
    $queue = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    // Display the original array
    echo "Original array:<br>";
    print_r($queue);
    echo "<br><br>";
    
    // 2. Remove the first element from the array using array_shift()
    $removedElement = array_shift($queue);
    echo "Removed element: $removedElement<br>";
    echo "Array after removing the first element:<br>";
    print_r($queue);
    echo "<br><br>";
    
    // 3. Add an element at the beginning of the array using array_unshift()
    array_unshift($queue, 0);
    echo "Array after adding element at the beginning:<br>";
    print_r($queue);
    echo "<br><br>";
    
?>