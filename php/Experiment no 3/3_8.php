<!-- Problem Stmt7: Write the PHP code for user defined function 
o	Take one email_id  as input from user.
o	Call user defined check_email function with parameter to check whether the entered email is valid or not.
o	Inside function body use call standard library function preg_match() to check whether entered string is in format of email.
o	Print final decision Valid/Invalid 
 -->

 <html>
    <head>
        <title>Email</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Enter your email:</h2>
            <input type="text" name="e1" required><br><br>
            <input type="submit" name="submit" value="Validate Email">
        </form>

        <?php
            // Define the function to check if an email is valid
            function check_email($email) {
            // Regular expression for validating an email address
            $pattern = '/^[\w\.-]+@[\w\.-]+\.\w+$/';
    
            // Use preg_match to validate the email address
            return preg_match($pattern, $email);
            }

        if (isset($_POST["submit"])) {
            $email = $_POST['e1'];
            if (check_email($email)) {
                echo "$email is a valid email address.<br>";
            } else {
                echo "$email is not a valid email address.<br>";
            }
        }
        ?>
    </body>
</html>