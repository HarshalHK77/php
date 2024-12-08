<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Shape Area</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="main">
        <form method="post" action="">
            <label for="shape">Select a shape:</label>
            <select id="shape" name="shape" required>
                <option value="Triangle">Triangle</option>
                <option value="Rectangle">Rectangle</option>
            </select>
            
            <label for="base">Base/Width:</label>
            <input type="number" id="base" name="base" required>

            <label for="height">Height:</label>
            <input type="number" id="height" name="height" required>
            
            <input type="submit" name="submit" value="Calculate Area">
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Abstract class Shape
                abstract class Shape {
                    abstract public function calculateArea();
                }

                // Triangle class extending Shape
                class Triangle extends Shape {
                    private $base;
                    private $height;

                    public function __construct($base, $height) {
                        $this->base = $base;
                        $this->height = $height;
                    }

                    public function calculateArea() {
                        return 0.5 * $this->base * $this->height;
                    }
                }

                // Rectangle class extending Shape
                class Rectangle extends Shape {
                    private $width;
                    private $height;

                    public function __construct($width, $height) {
                        $this->width = $width;
                        $this->height = $height;
                    }

                    public function calculateArea() {
                        return $this->width * $this->height;
                    }
                }

                // Get user input
                $shapeType = $_POST['shape'];
                $baseOrWidth = $_POST['base'];
                $height = $_POST['height'];

                // Create the corresponding shape object and calculate the area
                switch ($shapeType) {
                    case "Triangle":
                        $shape = new Triangle($baseOrWidth, $height);
                        break;
                    case "Rectangle":
                        $shape = new Rectangle($baseOrWidth, $height);
                        break;
                    default:
                        $shape = null;
                        break;
                }

                if ($shape !== null) {
                    echo "<p>The area of the " . $shapeType . " is: " . $shape->calculateArea() . "</p>";
                }
            }
            ?>
        </div>
        </div>

        
    </div>
</body>
</html>
