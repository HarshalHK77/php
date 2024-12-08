<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <div class="main">
        <form action="" method="POST">
            <label for="deposite">Deposite the Amount</label>
            <input type="number" id="Deposite" name="deposite">
            <label for="withdraw">Withdraw the Amount</label>
            <input type="number" id="withdraw" name="withdraw">
            <input type="submit" name="submit" value="submit">
        </form>

        <div id="result">
            <?php 
                
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    class ParentClass{

                        protected static $bank_balance = 1000;

                        public static function deposite($amount)
                        {
                           self::$bank_balance += $amount;
                        }
                        public static function withdraw($amount)
                        {
                            self::$bank_balance -= $amount;
                        }
                    }

                    class SonClass extends ParentClass {
                        public static function getBalance()
                        {
                            return self::$bank_balance;
                        }
                    }

                    $depositeAmount = $_POST['deposite'];
                    $withdrawAmount = $_POST['withdraw'];

                    $son1 = new SonClass();
                    $son2 = new SonClass();

                    $son1::deposite($depositeAmount);
                    $son2::withdraw($withdrawAmount);

                    echo "<p> final bank balance is " . sonClass::getBalance() . "<P>";

                }

            ?>
        </div>
        </div>
    </div>
</body>
</html>