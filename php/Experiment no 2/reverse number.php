<!-- Problem Stmt10 : Write a PHP program to reverse given number. -->

<html>
    <head>
        <title>Reverse Number</title>
    </head>
    <link rel="stylesheet" href="calculator.css">
    <body>
        <form action="" method="POST">
            <h2>Enter a number :</h2>
            <input type="number" name="n1" required><br><br>
            <input type="submit" name="submit" value="Reverse Number">
        </form>

        <?php
            if (isset($_POST["submit"])) {
                $num = $_POST["n1"];
                $original_num = $num; 
                $reverse = 0;

                // Using while loop to reverse the number
                while ($num > 0) {
                    $rem = $num % 10;
                    $reverse = ($reverse * 10) + $rem;
                    $num = intval($num / 10);
                }

                echo "Reversed number of $original_num is $reverse";
            }
        ?>
    </body>
</html>