<!-- Problem Stmt11: Write a PHP program to check palindrome number. -->

<html>
    <head>
        <title>Palindrome</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Enter a number :</h2>
            <input type="number" name="n1" required><br><br>
            <input type="submit" name="submit" value="Check Palindrome">
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

                if ($original_num == $reverse) {
                    echo "$original_num is a palindrome number.";
                } else {
                    echo "$original_num is not a palindrome number.";
                }
            }
        ?>
    </body>
</html>