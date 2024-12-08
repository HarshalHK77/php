<?php

$servername = "localhost"; 
$username = "root"; 
$password = "Root@123"; 
$dbname = "phplab"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// 1. Insert values into the table
function insertRecord($conn, $name, $email) {
    $sql = "INSERT INTO users VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully<br>";
    } else {
        echo "Error inserting record: " . $conn->error . "<br>";
    }
}

// 2. Select all values from the table
function selectAll($conn) {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo  " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "No records found<br>";
    }
}

// 3. Select values with a WHERE clause
function selectWithWhere($conn, $email) {
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "No records found for email: $email<br>";
    }
}

// 4. Update values in the database
function updateRecord($conn, $email, $newName) {
    $sql = "UPDATE users SET name = '$newName' WHERE email = '$email'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully<br>";
    } else {
        echo "Error updating record: " . $conn->error . "<br>";
    }
}

// 5. Delete a particular record from the database
function deleteRecord($conn, $name) {
    $sql = "DELETE FROM users WHERE name = '$name'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully<br>";
    } else {
        echo "Error deleting record: " . $conn->error . "<br>";
    }
}

// 6. Drop the table
function dropTable($conn, $tableName) {
    $sql = "DROP TABLE $tableName";
    if ($conn->query($sql) === TRUE) {
        echo "Table $tableName dropped successfully<br>";
    } else {
        echo "Error dropping table: " . $conn->error . "<br>";
    }
}

// // 7. Drop the database
// function dropDatabase($conn, $dbname) {
//     $sql = "DROP DATABASE $dbname";
//     if ($conn->query($sql) === TRUE) {
//         echo "Database $dbname dropped successfully<br>";
//     } else {
//         echo "Error dropping database: " . $conn->error . "<br>";
//     }
// }


// insertRecord($conn, 'Harshal Kumbhar', 'harshalkumbhar@gmail.com');
// insertRecord($conn, 'Shubham Patil', 'shubhampatil@gmail.com');
// insertRecord($conn, 'Meet Bhandari', 'meet@gmail.com');
selectAll($conn);
selectWithWhere($conn, 'harshalkumbhar@gmail.com');
updateRecord($conn,'shubhampatil@gmail.com' , 'Shubham');

selectAll($conn);


deleteRecord($conn, 'Meet Bhandari');

selectAll($conn);

// dropTable($conn, 'sample1');
// dropDatabase($conn, 'test_db');

// Close the connection
$conn->close();
?>
