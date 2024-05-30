<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <!-- Import Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Import AOS library for animations -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- Import Line Awesome Icons -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <!-- Import custom styles -->
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Ensure this path is correct -->
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <!-- Navbar brand/logo -->
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="index.php">
                <span class="h3 fw-bold d-block d-lg-none">Farisha Nabiha</span>
                <img src="assets/images/person.jpg" class="d-none d-lg-block rounded-circle" alt="">
            </a>
            <!-- Navbar toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
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
                    <li class="nav-item">
                        <a class="nav-link" href="calculator.php">Calculator</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- //NAVBAR -->

    <!-- Main Content -->
   <div class="container mt-5 pt-5"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <!-- Main Heading -->
                <h1 class="display-4 fw-bold">My Photo</h1>
                <!-- Photo Gallery -->
                <div class="row mt-4">
                    <div class="col-md-4">
                        <img src="./assets/images/photo1.jpg" class="img-fluid rounded" alt="Photo 1">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/photo2.jpg" class="img-fluid rounded" alt="Photo 2">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/photo3.jpg" class="img-fluid rounded" alt="Photo 3">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/photo4.jpg" class="img-fluid rounded" alt="Photo 4">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/photo10.jpg" class="img-fluid rounded" alt="Photo 10">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/photo12.jpg" class="img-fluid rounded" alt="Photo 12">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/photo7.jpg" class="img-fluid rounded" alt="Photo 7">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/photo8.jpg" class="img-fluid rounded" alt="Photo 8">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/photo9.jpg" class="img-fluid rounded" alt="Photo 9">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Import Bootstrap Bundle with Popper -->
   <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Import AOS library -->
    <script src="assets/js/aos.js"></script>
    <!-- Import custom scripts -->
    <script src="assets/js/main.js"></script>
    <script>
        // Initialize AOS library
        AOS.init();
    </script>
</body>
</html>
