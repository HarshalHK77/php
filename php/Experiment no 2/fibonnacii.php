<!-- Problem Stmt12 : Write a PHP program to print fibonacci series -->

<html>
    <head>
        <title>Print Fibonacci Series</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Enter the number of terms :</h2>
            <input type="number" name="n1" required><br><br>
            <input type="submit" name="submit" value="Fibonacci Series">
        </form>

        <?php
            if (isset($_POST["submit"])) {
                $num = $_POST["n1"];
                $a = 0;
                $b = 1;

                echo "Fibonacci Series: ";

                for ($i = 0; $i < $num; $i++) {
                    echo $a . " ";
                    $next_term = $a + $b;
                    $a = $b;
                    $b = $next_term;
                }
            }
        ?>
    </body>
</html>