<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farisha Nabiha Multimedia Computing Student</title>
    <!-- Linking external CSS files for styling -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR Section -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <!-- Navbar brand with logo and name -->
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="index.php">
                <span class="h3 fw-bold d-block d-lg-none">Farisha Nabiha</span>
                <img src="./assets/images/person.jpg" class="d-none d-lg-block rounded-circle" alt="Farisha Nabiha">
            </a>
            <!-- Navbar toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="calculator.php">Calculator</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    <!-- End of NAVBAR Section -->

    <!-- Main Content Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- Main heading and subheading -->
                <h1 class="display-4 fw-bold">I'M <span class="text-brand">FARISHA NABIHA</span> FROM UITM SHAH ALAM</h1>
                <p class="display-1 lead mt-2 mb-4">I am a multimedia computing student</p>
                <!-- Button linking to "About Me" page -->
                <a href="myself.php" class="btn btn-brand me-3"> - About Me - </a>
            </div>
        </div>
    </div>

    <!-- Linking external JavaScript files -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
        AOS.init(); // Initialize AOS library for animations
    </script>
</body>
</html>
