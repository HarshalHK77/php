<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="fruit.css"> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="main">
        <form action="" method="POST">
            <label for="text">Select the Fruit: </label>
            <select name="fruit" id="fruit">
                <option value="Apple">Apple</option>
                <option value="Orange">Orange</option>
                <option value="Grape">Grape</option>
            </select>
            <input type="submit" value="submit" name="submit">
        </form>
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                Abstract class fruit{
                    protected $name;

                    public function __construct($name)
                    {
                        $this->name = $name;
                    }

                    abstract public function color();
                }

                class Apple extends fruit
                {
                    public function color(){
                        return $this->name. " is Red";
                    }
                }

                class Orange extends fruit
                {
                    public function color(){
                        return $this->name. " is Orange";
                    }
                    
                }

                class Grape extends fruit
                {
                    public function color(){
                        return $this->name. " is purple";
                    }
                    
                }

                $fruitType = $_POST['fruit'];

                // Create the corresponding fruit object and display the color
                switch ($fruitType) {
                    case "Apple":
                        $fruit = new Apple($fruitType);
                        break;
                    case "Orange":
                        $fruit = new Orange($fruitType);
                        break;
                    case "Grape":
                        $fruit = new Grape($fruitType);
                        break;
                    default:
                        $fruit = null;
                        break;
                }

                if ($fruit !== null) {
                    echo "<p>" . $fruit->color() . "</p>";
                }
            }
        ?>
    </div>

        
    </div>
</body>
</html>