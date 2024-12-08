<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum among 3</title>
    <link rel="stylesheet" href="maximum.css">
</head>
<body>
    <div class="main">
    <form method="post">
        <input type="number" name="num1" id="num1" placeholder="Enter number 1 ">
        <input type="number" name="num2" id="num2" placeholder="Enter number 2 ">
        <input type="number" name="num3" id="num3" placeholder="Enter number 3 ">
        <input type="submit" value="Find maximum" name="submit" id="btn">
        
    </form>

    <?php

        
        if(isset($_POST['submit']))
        {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $c = $_POST['num3'];

            if($a>$b)
           {
                if($a>$c)
                {
                    echo "<h3>The maximum no is $a</h3>";
                }
                else
                {
                    echo "<h3>The maximum no is $c</h3>";
                }
            }
            else
            {
                if($b>$c)
                {
                    echo "<h3>The maximum no is $b</h3>";
                }
                else
                {
                    echo "<h3>The maximum no is $c</h3>";
                }
            }

        }
    ?>
    </div>

</body>
</html>