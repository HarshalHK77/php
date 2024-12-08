<!-- Problem Stmt8 : Print Table of entered number -->

<html>
    <head>
        <title>Print Table</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Enter a number :</h2>
            <input type="number" name="n1" required><br><br>
            <input type="submit" name="submit" value="Print Table">
        </form>

        <?php
            if (isset($_POST["submit"])) {
                $num = $_POST["n1"];
                echo"The multiplication table of $num :";
                echo"<table border='1'>";
                for($i=1;$i<=10;$i++){
                    $result = $num*$i;
                    echo" <tr><td> $num * $i = $result </td></tr>";
                }
                echo"</table>";
            }
        ?>
    </body>