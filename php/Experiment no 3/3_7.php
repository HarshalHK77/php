<!-- Problem Stmt7: check whether entered number is palindrome or not using user defined function. -->

<html>
    <head>
        <title>Palindrome</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        <div class="main">
        <form action="" method="POST">
            <h2>Enter a number :</h2>
            <input type="number" name="n1" required><br><br>
            <input id="btn" type="submit" name="submit" value="Check Palindrome">
        </form>
        </div>

        <?php
        function isPalindrome($number) {
            // Convert the number to a string
            $str = strval($number);
        
            // Reverse the string
            $reversedStr = strrev($str);
        
            // Check if the original string is the same as the reversed string
            return $str === $reversedStr;
        }

        if (isset($_POST["submit"])) {
            $number = $_POST['n1'];
            if (isPalindrome($number)) {
                echo "$number is a palindrome.<br>";
            } else {
                echo "$number is not a palindrome.<br>";
            }
        }
        ?>
    </body>
</html>