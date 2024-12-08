<html>  
    <body>
        <form action="" method="POST">
            Enter the number :
            <input type="text" name="n1">
            <input type="submit" name="submit">
        </form>

    <?php 
        if(isset($_POST["submit"])){
            $a = $_POST["n1"];
            echo"The typed number is ".$a;
        }
    ?>
