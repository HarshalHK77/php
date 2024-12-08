<?php
        if(isset($_POST['submit']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $result = $num1+$num2;
            echo "<h3>The additon of $num1 and $num2 is $result</h3>";
        }
?>