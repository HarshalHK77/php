<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
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

            function set_name($name)
            {
                $this->name = $name;
            }
            function get_name()
            {
                return $this->name;
            }

            function display()
            {
                echo $this->name." ".$this->color;
            }
            function __destruct()
            {
                echo "the fruit name is this";
            }
        }

        // $apple =new Fruit();
        // $banana =new Fruit();

        $peru =new Fruit("peru","green");


        // $apple->set_name("Apple");
        // $banana->set_name("Banana");

        // echo $apple->get_name();
        // echo $banana->get_name();

        $peru->display();

?>
</body>
</html>