<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array</title>
</head>
<body>
    <?php
    //-	Create the indexed array with list of Friend names.
    echo "<br><h4>Create the indexed array with list of Friend names.</h4>";
        $friends=array("Harshal","Shubham","Meet");
        echo $friends[0];
        echo $friends[1];
        echo $friends[2];

    //-	Traversing the created Indexed Array above using foreach loop
    echo "<br><h4>Traversing the created Indexed Array above using foreach loop</h4>";
    foreach($friends as $f)
    {
        echo $f."<br>";
    }
    //-	Retrieving the particular element of an array
    echo "<br><h4>Retrieving the particular element of an array</h4>";
    echo "Friends[1]= ".$friends[1];
    //-	Retrieves range of elements from an array using array_slice()
    echo "<br><h4>Retrieves range of elements from an array using array_slice()</h4>";
    $result=array();
    $result=array_slice($friends,0);
    print_r($result) ;
    //-	Insert the additional element into the array
    echo "<br><h4>Insert the additional element into the array</h4>";

    $friends[]="Snehal";
    foreach($friends as $f)
    {
        echo $f."<br>";
    }
    // Display the entire array element using 1) print_r() and 2) var_dump()
    echo "<br><h4>Display the entire array element using 1) print_r() and 2) var_dump()</h4>";
    print_r($friends);
    echo "<br>";
    echo "<br>";

    var_dump($friends);
    //Count an array elements using count () and sizeof()
    echo "<br><h4>Count an array elements using count () and sizeof()</h4>";
    echo "Count of an array using count()= ".count($friends);
    echo "<br>";
    echo "<br>";
    echo "Sizeof of an array using sizeof()= ".sizeof($friends);

    //Find the occurrence of each value in an array suing array_count_values()
    echo "<br><h4>Find the occurrence of each value in an array suing array_count_values()</h4>";
    $result=array_count_values($friends);
    print_r($result) ;

    //Sort the array elements using sort () , assort() and rsort()
    echo "<br><h4>Sort the array elements using sort () , assort() and rsort()</h4>";
    print_r(sort($friends));


    $array = array(23, 4, 5, 4, 5, 23, 5, 67, 23);

    echo "<br><h4>Sorting the array using sort()</h4>";
    sort($array);
    print_r($array);

    echo "<br><h4>Sorting the array using asort()</h4>";
    $array = array(23, 4, 5, 4, 5, 23, 5, 67, 23); // Resetting the array
    asort($array);
    print_r($array);

    echo "<br><h4>Sorting the array using rsort()</h4>";
    $array = array(23, 4, 5, 4, 5, 23, 5, 67, 23); // Resetting the array
    rsort($array);
    print_r($array);

    echo "<br><h4>Moving the pointer through the array</h4>";
    $array = array(23, 4, 5, 4, 5, 23, 5, 67, 23); // Resetting the array
    echo "Current: " . current($array) . "<br>"; // Outputs: 23
    echo "Next: " . next($array) . "<br>"; // Outputs: 4
    echo "Next: " . next($array) . "<br>"; // Outputs: 5
    echo "Previous: " . prev($array) . "<br>"; // Outputs: 4
    echo "End: " . end($array) . "<br>"; // Outputs: 23
    echo "Reset: " . reset($array) . "<br>"; // Outputs: 23

    echo "<br><h4>Removing duplicate elements</h4>";
    $uniqueArray = array_unique($array);
    print_r($uniqueArray);

    echo "<br><h4>Count an array elements using count() and sizeof()</h4>";
    echo "Count: " . count($array) . "<br>"; // Outputs the number of elements in the array
    echo "Sizeof: " . sizeof($array) . "<br>"; // Outputs the number of elements in the array

    ?>
    
</body>
</html>