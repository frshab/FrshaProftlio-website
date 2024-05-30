<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="calculator.php">Calculator</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- //NAVBAR -->

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 pb-4" >
               <br>
               <br>
               <br>
               <br>
                <h1>Eager to collaborate? </h1>
                <h1>Let's connect and see where it takes us.</h1>
            </div>
            <div class="col-lg-8" >
                <form id="contactForm" action="thankyou.php" method="POST" class="row g-lg-3 gy-3">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
                    </div>
                    <div class="form-group col-12">
                        <textarea name="message" rows="4" class="form-control" placeholder="Enter your message" required></textarea>
                    </div>
                    <div class="form-group col-12 d-grid">
                        <button type="submit" class="btn btn-brand">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- SCRIPTS -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>

    <!-- JavaScript to redirect to thank you page -->
    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission

            // Redirect to thank you page after form submission
            window.location.href = "thankyou.php";
        });
    </script>

</body>
</html>
<!-- Created by Farisha Nabiha -->
