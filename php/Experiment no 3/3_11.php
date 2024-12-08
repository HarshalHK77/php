<!-- Problem Stmt1 : Perform the following  -->
<?php
// 1. Create the array with specified elements
$numbers = [23, 4, 5, 4, 5, 23, 5, 67, 23];

// 2. Remove duplicate elements using array_unique()
$uniqueNumbers = array_unique($numbers);

// 3. Display the array with duplicates removed
echo "<h2>Array with duplicates removed using array_unique():<br></h2>";
print_r($uniqueNumbers);
?>