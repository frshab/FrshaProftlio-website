<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" href="path/to/calculator.css">

</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="index.php">
                <span class="h3 fw-bold d-block d-lg-none">Farisha Nabiha</span>
                <img src="./assets/images/person.jpg" class="d-none d-lg-block rounded-circle" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="photo_gallery.php">Photo Gallery</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="myself.php">Myself</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="education.php">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="passion.php">Passion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comment.php">Contact</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="calculator.php">Calculator</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- //NAVBAR -->

    <div class="container mt-5 pt-5"> 
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Simple Calculator
                    </div>
                    <div class="card-body">
                       <form method="POST">
                            <div class="mb-3">
                                <label for="num1" class="form-label">Number 1</label>
                                <input type="text" class="form-control" id="num1" name="num1" required>
                            </div>
                            <div class="mb-3">
                                <label for="num2" class="form-label">Number 2</label>
                                <input type="text" class="form-control" id="num2" name="num2" required>
                            </div>
                            <div class="mb-3">
                                <label for="operator" class="form-label">Operator</label>
                                <select class="form-select" id="operator" name="operator" required>
                                    <option value="">Select an operator</option>
                                    <option value="add">Addition (+)</option>
                                    <option value="subtract">Subtraction (-)</option>
                                    <option value="multiply">Multiplication (*)</option>
                                    <option value="divide">Division (/)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Calculate</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["operator"])) {
                            // Retrieve values from form
                            $num1 = $_POST["num1"];
                            $num2 = $_POST["num2"];
                            $operator = $_POST["operator"];
                            $operation = "";

                            // Perform calculation based on selected operator
                            switch ($operator) {
                                case "add":
                                    $result = $num1 + $num2;
                                    $operation = "$num1 + $num2";
                                    break;
                                case "subtract":
                                    $result = $num1 - $num2;
                                    $operation = "$num1 - $num2";
                                    break;
                                case "multiply":
                                    $result = $num1 * $num2;
                                    $operation = "$num1 * $num2";
                                    break;
                                case "divide":
                                    // Check if the divisor is not zero
                                    if ($num2 != 0) {
                                        $result = $num1 / $num2;
                                        $operation = "$num1 / $num2";
                                    } else {
                                        $result = "Cannot divide by zero!";
                                        $operation = "$num1 / $num2";
                                    }
                                    break;
                                default:
                                    $result = "Invalid operator";
                                    break;
                            }
                            echo "<strong>Operation: </strong>" . $operation . "<br>";
                            echo "<strong>Result: </strong>" . $result;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- BMI Calculator -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        BMI Calculator
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="height" class="form-label">Height (cm)</label>
                                <input type="text" class="form-control" id="height" name="height" required>
                            </div>
                            <div class="mb-3">
                                <label for="weight" class="form-label">Weight (kg)</label>
                                <input type="text" class="form-control" id="weight" name="weight" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="calculate_bmi">Calculate BMI</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate_bmi"])) {
                            // Retrieve values from form
                            $height_cm = $_POST["height"];
                            $weight = $_POST["weight"];
                            $height = $height_cm / 100; // Convert height to meters

                            // Check if height and weight are numeric and not empty
                            if (is_numeric($height) && is_numeric($weight) && $height > 0 && $weight > 0) {
                                // Calculate BMI
                                $bmi = $weight / ($height * $height);

                                // Display BMI, height, weight, and interpretation
                                echo "<strong>Height: </strong>" . $height_cm . " cm<br>";
                                echo "<strong>Weight: </strong>" . $weight . " kg<br>";
                                echo "<strong>BMI: </strong>" . round($bmi, 2) . " - ";
                                if ($bmi < 18.5) {
                                    echo "Underweight";
                                } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                                    echo "Normal weight";
                                } elseif ($bmi >= 25 && $bmi < 29.9) {
                                    echo "Overweight";
                                } else {
                                    echo "Obese";
                                }
                            } else {
                                // Display error message if height or weight is not valid
                                echo "Please enter valid height and weight values.";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
