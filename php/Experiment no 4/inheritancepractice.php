<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inheritance</title>
</head>
<body>
    <?php
        class Fruit{

            public $name;
            public $color;

            public function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }

            public function intro()
            {
                echo " A ".$this->name. "is a fruit and the color of the fruit is ".$this->color;
            }
        }

        class Cherry extends Fruit{

            public function message()
            {
                echo("is cherry fruit or berry");
            }
 
        }
        $cherry = new Cherry("cherry","red");
        $cherry->message();
        $cherry->intro();

?>
</body>
</html>