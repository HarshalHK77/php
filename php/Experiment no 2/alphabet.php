<!DOCTYPE html>
<html>
    <head>
        <title>Alphabet Triangle</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Enter the number of rows :</h2>
            <input type="number" name="n1" required><br><br>
            <input type="submit" name="submit" value="Print Alphabet Triangle">
        </form>

        <?php
            if (isset($_POST["submit"])) {
                $num_rows = $_POST["n1"];

                echo "<pre>";
                for ($i = 0; $i < $num_rows; $i++) {
                    // Print leading spaces
                    for ($j = $i; $j < $num_rows - 1; $j++) {
                        echo " ";
                    }
                    // Print increasing part of the alphabet
                    for ($j = 0; $j <= $i; $j++) {
                        echo chr(65 + $j);
                    }
                    // Print decreasing part of the alphabet
                    for ($j = $i - 1; $j >= 0; $j--) {
                        echo chr(65 + $j);
                    }
                    echo "\n";
                }
            }
        ?>
    </body>
</html>
