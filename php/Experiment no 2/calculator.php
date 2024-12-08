<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Calculator</title>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
    <div class="main">
        <form method="post">
            <input type="number" name="num1" id="num1" placeholder="Enter number 1" required>
            <select name="operation" id="operation" required>
                <option value="" disabled selected>Select operation</option>
                <option value="1">Addition</option>
                <option value="2">Subtraction</option>
                <option value="3">Multiplication</option>
                <option value="4">Division</option>
                <option value="5">Modulus</option>
            </select>
            <input type="number" name="num2" id="num2" placeholder="Enter number 2" required>
            <input type="submit" value="Calculate" name="submit" id="btn">
        </form>

        <?php
        if(isset($_POST['submit']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = '';

            switch($operation)
            {
                case 1:
                    $result = $num1 + $num2;
                    echo "<h3>Result: $num1 + $num2 = $result</h3>";
                    break;
                case 2:
                    $result = $num1 - $num2;
                    echo "<h3>Result: $num1 - $num2 = $result</h3>";
                    break;
                case 3:
                    $result = $num1 * $num2;
                    echo "<h3>Result: $num1 * $num2 = $result</h3>";
                    break;
                case 4:
                    if($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "<h3>Result: $num1 / $num2 = $result</h3>";
                    } else {
                        echo "<h3>Cannot divide by zero</h3>";
                    }
                    break;
                case 5:
                    if($num2 != 0) {
                        $result = $num1 % $num2;
                        echo "<h3>Result: $num1 % $num2 = $result</h3>";
                    } else {
                        echo "<h3>Cannot divide by zero</h3>";
                    }
                    break;
                default:
                    echo "<h3>Wrong choice</h3>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
