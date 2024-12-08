<!-- Problem Stmt9 : Write a PHP program to check armstrong number. -->
<html>
    <head>
        <title>Check Armstrong Number</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Enter a number :</h2>
            <input type="number" name="n1" required><br><br>
            <input type="submit" name="submit" value="Check Armstrongs">
        </form>

        <?php
           if (isset($_POST["submit"])) {
            $num = $_POST["n1"];
            $original_num = $num;
            $sum = 0;
            $numDigits = strlen((string)$num);
    
            while ($num != 0) {
                $rem = $num % 10;
                $sum += pow($rem, $numDigits);
                $num = intval($num / 10);
            }
    
            if ($sum == $original_num) {
                echo "<h3>$original_num is an Armstrong number.</h3>";
            } else {
                echo "<h3>$original_num is not an Armstrong number.</h3>";
            }
        }
        ?>
    </body>