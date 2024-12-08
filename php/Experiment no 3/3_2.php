<!-- Problem Stmt2 : Perform the following -->
<?php
    // 1. Create the Associative array with list of month numbers and month names up to the 11th month
    $months = [
        1 => "January",
        2 => "February",
        3 => "March",
        4 => "April",
        5 => "May",
        6 => "June",
        7 => "July",
        8 => "August",
        9 => "September",
        10 => "October",
        11 => "November"
    ];
    
    // 2. Insert the 12th month in the above array
    $months[12] = "December";
    
    // 3. Retrieve a particular element of an array based on key
    echo "The 5th month is: " . $months[5]; // Outputs: May
    echo "<br><br>";
    
    // 4. Display the entire array element using print_r() and var_dump()
    echo "Using print_r():<br>";
    print_r($months);
    echo "<br><br>";
    
    echo "Using var_dump():<br>";
    var_dump($months);
    echo "<br><br>";
    
    // 5. Looping through an associative array using each() and list()
    // The each() function is deprecated as of PHP 7.2.0, but for demonstration:
    // echo "Looping through the array using each() and list():<br>";
    // reset($months); // Reset the array pointer
    // while (list($key, $value) = each($months)) {
    //     echo "Key: $key; Value: $value<br>";
    // }
    // echo "<br>";

    // 5. Loop through an associative array using foreach
    echo "Looping through the array using foreach():<br>";
    foreach ($months as $key => $value) {
    echo "Key: $key; Value: $value<br>";
    }
    echo "<br>";
    
    // 6. Swap the keys and values in the array using array_flip()
    $flippedMonths = array_flip($months);
    echo "Swapped keys and values using array_flip():<br>";
    print_r($flippedMonths);
    echo "<br><br>";
    
    // 7. Check the existence of any value and key using in_array() and array_key_exists()
    // Check if the value "May" exists in the array
    if (in_array("May", $months)) {
        echo "Value 'May' exists in the array.<br>";
    } else {
        echo "Value 'May' does not exist in the array.<br>";
    }
    
    // Check if the key 6 exists in the array
    if (array_key_exists(6, $months)) {
        echo "Key 6 exists in the array.<br>";
    } else {
        echo "Key 6 does not exist in the array.<br>";
    }
    echo "<br>";
    
    // 8. Retrieve the key based on the value of any element using array_search()
    $key = array_search("August", $months);
    echo "The key for the value 'August' is: $key";
    echo "<br><br>";
        
?>
