
<!-- Problem Stmt6 :  Find the Sum of Digits -->

<html>
    <head>
        <title>Sum of Digits</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Enter a number :</h2>
            <input type="number" name="n1" required><br><br>
            <input type="submit" name="submit" value="Sum of Digits">
        </form>

        <?php
            if (isset($_POST["submit"])) {
                $num = $_POST["n1"];
                $original_num = $num; 
                $sum = 0;
                
                while ($num > 0) {
                    $rem = $num % 10;
                    $sum = $sum + $rem;
                    $num = intval($num / 10);
                }
                
                echo "Sum of digits of $original_num is $sum";
            }
        ?>
    </body>
</html>
