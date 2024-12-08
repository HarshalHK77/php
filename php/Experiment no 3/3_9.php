<!-- Problem Stmt9: Find the Factorial program in PHP using recursive function -->

<html>
    <head>
        <title>Factorial</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Enter a number :</h2>
            <input type="number" name="n1" required><br><br>
            <input type="submit" name="submit" value="Calculate Factorial">
            <?php
            // Define a recursive function to calculate factorial
            function factorial($n) {
            // Base case: factorial of 0 is 1
            if ($n <= 1) {
                return 1;
            }
            // Recursive case: n * factorial of (n-1)
            return $n * factorial($n - 1);
            }

            if (isset($_POST["submit"])) {
                $number = $_POST['n1'];
                if ($number >= 0) {
                    $result = factorial($number);
                    echo "The factorial of $number is: $result<br>";
                } else {
                    echo "Please enter a non-negative integer.<br>";
                }
            }
        ?>
        </form>

        
    </body>
</html>