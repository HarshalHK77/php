<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Operations</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins",sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .main
        {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            gap: 50px;
            background: linear-gradient(135deg,blue,lightblue);
        }
        form
        {
            display: flex;
            flex-direction: column;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            gap: 5px;
            width: 350px;
        }
        form button
        {
            background-color: blue;
            color: white;
            border: 0;
            outline: 0;
            border-radius: 10px;
            padding: 10px;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- Form to insert values -->
    <div class="main">
    <h2>Database Operations: Insert and Show Data</h2>

        <form action="insert.php" method="post">
            <label for="name">User:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit" name="insert">INSERT</button>
        </form>

        <!-- Button to show all values -->
        <form action="insert.php" method="post">
            <button type="submit" name="show">SHOW</button>
        </form>
    </div>

    <?php
    // Database credentials
    $hostname = "localhost";
    $name = "root";
    $password = "Root@123";
    $dbName = "phplab";

    // Create a connection to MySQL server
    $conn = new mysqli($hostname, $name, $password, $dbName);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the INSERT button is clicked
    if (isset($_POST['insert'])) {
        $user = $_POST['name'];
        $email = $_POST['email'];

        // Insert values into the table
        $sql = "INSERT INTO users (name, email) VALUES ('$user', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Record inserted successfully.</p>";
        } else {
            echo "<p>Error inserting record: " . $conn->error . "</p>";
        }
    }

    // Check if the SHOW button is clicked
    if (isset($_POST['show'])) {
        selectAll($conn);
    }

    // Function to select all records from the table
    function selectAll($conn) {
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No records found.</p>";
        }
    }

    // Close the connection
    $conn->close();
    ?>
</body>
</html>
