<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./registration.css" />
    <title>Registration Form</title>
  </head>
  <body>
    <div class="main">
      <h2>Registration Form</h2>
      <form method="POST" action="registration.php">
        <div class="detials-container">
          <div class="details">
            <label for="roll">PRN:</label>
            <input type="text" id="roll" name="roll"  />
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"  />
            <label for="class">Class:</label>
            <select id="class" name="class" >
              <option value="">Select your class</option>
              <option value="Second Year">Second Year</option>
              <option value="Third Year">Third Year</option>
              <option value="B.Tech">B.Tech</option>
            </select>

            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email"  />

            <label for="phone">Phone Number:</label>
            <input
              type="tel"
              id="phone"
              name="phone"
              pattern="[0-9]{10}"
              
            />
          </div>

          <div class="details2">
            
          <div class="gender">
          <label>Gender:</label>
            <div class="">
              <input
                type="radio"
                id="male"
                name="gender"
                value="Male"
                
              />
              <label for="male">Male</label>
            </div>
            <div class="">
              <input
                type="radio"
                id="female"
                name="gender"
                value="Female"
                
              />
              <label for="female">Female</label>
            </div>
          </div>

            <div class="technology">
            <label>Technology Known:</label>
            <div class="">
              <input type="checkbox" id="html" name="tech[]" value="HTML" />
              <label for="html">HTML</label>
            </div>
            <div class="">
              <input type="checkbox" id="css" name="tech[]" value="CSS" />
              <label for="css">CSS</label>
            </div>
            <div class="">
              <input
                type="checkbox"
                id="javascript"
                name="tech[]"
                value="JavaScript"
              />
              <label for="javascript">JavaScript</label>
            </div>
            <div class="">
              <input type="checkbox" id="php" name="tech[]" value="PHP" />
              <label for="php">PHP</label>
            </div>
            </div>
          </div>
        </div>

        <input type="submit" value="Submit" />
      </form>
      <div class="result">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errors = [];


            if (empty($_POST["roll"]) || !preg_match("/^[0-9]+$/", $_POST["roll"])) {
                $errors[] = "Invalid PRN.";
            }


            if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z ]+$/", $_POST["name"])) {
                $errors[] = "Invalid name.";
            }


            $allowed_classes = ["Second Year", "Third Year", "B.Tech"];
            if (empty($_POST["class"]) || !in_array($_POST["class"], $allowed_classes)) {
                $errors[] = "Invalid class.";
            }


            if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email.";
            }


            if (empty($_POST["phone"]) || !preg_match("/^[0-9]{10}$/", $_POST["phone"])) {
                $errors[] = "Invalid phone number.";
            }


            $allowed_genders = ["Male", "Female"];
            if (empty($_POST["gender"]) || !in_array($_POST["gender"], $allowed_genders)) {
                $errors[] = "Invalid gender.";
            }


            $allowed_techs = ["HTML", "CSS", "JavaScript", "PHP"];
            if (!empty($_POST["tech"])) {
                foreach ($_POST["tech"] as $tech) {
                    if (!in_array($tech, $allowed_techs)) {
                        $errors[] = "Invalid technology: $tech.";
                    }
                }
            }


            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
            } else {
                echo "<p>Form submitted successfully!</p>";

            }
        }
      ?>
      </div>

    </div>
  </body>
</html>
