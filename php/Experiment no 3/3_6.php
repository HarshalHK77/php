<!-- Problem Stmt 6: min() and max() function in array -->

<?php
    // 1. Initialize arrays with marks for 3 subjects for 10 students
    $physics = [56, 78, 90, 67, 89, 45, 76, 88, 92, 81];
    $chemistry = [66, 88, 70, 77, 99, 55, 86, 98, 72, 91];
    $maths = [76, 68, 80, 87, 79, 65, 96, 78, 82, 71];
    
    // 2. Merge all arrays to find the maximum and minimum marks
    // $allMarks = array_merge($physics, $chemistry, $maths);
    // print_r($allMarks);

    // 3. Find the maximum marks among all subjects
    $maxMarks = max($allMarks);
    echo "The maximum marks among all subjects are: $maxMarks<br>";
    
    // 4. Find the minimum marks among all subjects
    $minMarks = min($allMarks);
    echo "The minimum marks among all subjects are: $minMarks<br>";
    
?>