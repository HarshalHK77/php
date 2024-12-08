<!-- Problem Stmt7 : Write a PHP program to check prime number. -->


<html>
    <head>
        <title>Check prime number</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Enter a number :</h2>
            <input type="number" name="n1" required><br><br>
            <input type="submit" name="submit" value="Check Prime">
        </form>

        <?php
            if (isset($_POST["submit"])) {
                $num = $_POST["n1"];
                $isPrime = true;

                if ($num <= 1) {
                    $isPrime = false;
                } 
                elseif ($num == 2) {
                    $isPrime = true;
                } 
                elseif ($num % 2 == 0) {
                    $isPrime = false;
                } 
                else {
                    for ($i = 3; $i <= sqrt($num); $i += 2) {
                        if ($num % $i == 0) {
                            $isPrime = false;
                            break;
                        }
                    }
                }

                if ($isPrime) {
                    echo "<h3>$num is a prime number.</h3>";
                } else {
                    echo "<h3>$num is not a prime number.</h3>";
                }
            }
        ?>
    </body>