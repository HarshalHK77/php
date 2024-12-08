<!-- Problem Stmt3: Perform the following -->
<?php
    // 1. Create the multidimensional array (Nested arrays)
    $students = [
        [
            "Roll" => 1,
            "Name" => "ABC",
            "Class" => "FY",
            "Marks" => 97
        ],
        [
            "Roll" => 2,
            "Name" => "PQR",
            "Class" => "SY",
            "Marks" => 89
        ],
        [
            "Roll" => 3,
            "Name" => "XYZ",
            "Class" => "TY",
            "Marks" => 85
        ]
    ];
    
    // 2. Access a particular array element
    echo "Accessing the name of the first student: " . $students[0]["Name"]; 
    echo "<br><br>";
    
    // 3. Access all the array elements using a nested for loop
    echo "Accessing all the array elements using a nested for loop:<br>";
    for ($i = 0; $i < count($students); $i++) {
        foreach ($students[$i] as $key => $value) {
            echo "$key: $value<br>";
        }
        echo "<br>";
    }
    
    // 4. Displaying array elements using print_r() and var_dump()
    echo "Displaying the array using print_r():<br>";
    print_r($students);
    echo "<br><br>";
    
    echo "Displaying the array using var_dump():<br>";
    var_dump($students);
    echo "<br><br>";
    
?>