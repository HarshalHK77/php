<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type of triangle</title>
    <link rel="stylesheet" href="typeoftriangle.css">
</head>
<body>
    <div class="main">
    <form method="post">
        <input type="number" name="num1" id="num1" placeholder="Enter side of traingle">
        <input type="number" name="num2" id="num2" placeholder="Enter side of traingle">
        <input type="number" name="num3" id="num3" placeholder="Enter side of traingle">
        <input type="submit" value="Find maximum" name="submit" id="btn">
        
    </form>

    <?php

        
        if(isset($_POST['submit']))
        {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $c = $_POST['num3'];

            if($a==$b && $b==$c & $a==$c)
            {
                echo "<h3>The traingle is equilateral traingle</h3>";
            }
            else if($a==$b || $b==$c || $a==$c)
            {
                echo "<h3>The traingle is isoceles traingle</h3>";
            }
            else
            {
                echo "<h3>The traingle is scalene traingle</h3>";
            }

        }
    ?>
    </div>

</body>
</html>