<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- Link to AOS CSS for animations -->
    <link rel="stylesheet" href="./assets/css/aos.css">
    <!-- Link to Line Awesome Icons -->
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <!-- Link to custom styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        /* Ensure the navbar has a high z-index */
        .navbar {
            z-index: 1000;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <!-- Navbar brand/logo -->
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="index.php">
                <span class="h3 fw-bold d-block d-lg-none">Farisha Nabiha</span>
                <img src="./assets/images/person.jpg" class="d-none d-lg-block rounded-circle" alt="">
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
                    <h1 class="display-4 fw-bold">My Education</h1>
                </div>
            </div>

            <!-- Education Details -->
            <div class="row gy-3">
                <div class="col-lg-7">
                    <div class="row gy-4">
                        <!-- Secondary School -->
                        <div class="col-12">
                            <div class="bg-base p-4 rounded-4 shadow-effect">
                                <h4>SECONDARY SCHOOL</h4>
                                <p class="text-brand mb-2">Smk Taman Keramat  (2015 2019)</p>
                                <p class="mb-0">SPM: 3A 3A- 1B 2C+</p>
                            </div>
                        </div>

                        <!-- Matriculation -->
                        <div class="col-12">
                            <div class="bg-base p-4 rounded-4 shadow-effect">
                                <h4>MATRICULATION</h4>
                                <p class="text-brand mb-2">Johor Matriculation Collage  (2020- 2022)</p>
                                <p class="mb-0">CGPA : 3.54  MUET : BAND 4.5</p>
                            </div>
                        </div>

                        <!-- Bachelor Degree -->
                        <div class="col-12">
                            <div class="bg-base p-4 rounded-4 shadow-effect">
                                <h4>BACHELOR OF COMPUTER SCIENCE (HONS.) MULTIMEDIA COMPUTING</h4>
                                <p class="text-brand mb-2">MARA University of Technology (UiTM)  (2022 - 2026)</p>
                                <p class="mb-0">CGPA : 3.43</p>
                            </div>
                        </div>

                        <!-- Resume Link -->
                        <div class="col-12">
                            <div class="bg-base p-4 rounded-4 shadow-effect">
                                <h4>RESUME</h4>
                                <p class="text-brand mb-2">Click below to see my resume</p>
                                <a href="assets/images/resume.pdf" class="text-brand resume-link" target="_blank">See Resume</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script>
        // Initialize AOS library
        AOS.init();
        // Change resume link color on hover
        document.querySelectorAll('.resume-link').forEach(link => {
            link.addEventListener('mouseover', () => {
                link.style.color = 'blue';
            });
            link.addEventListener('mouseout', () => {
                link.style.color = '';
            });
        });
    </script>
</body>
</html>
