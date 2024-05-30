<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passion</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
	<style>
        /* Custom CSS for paragraph text */
        .container p {
            color: black;
        }
    </style>
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

 <div class="container mt-5 pt-5"> 
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12">
			<br>
                <h1 class="display-4 fw-bold">My Passion</h1>
                    </div>
                </div>
				
		  <div class="row gy-3">
                <div class="col-lg-8">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="bg-base p-4 rounded-4 shadow-effect">
                                <h4>Photography</h4>
                    <p class="text-brand mb-2">Capturing moments through the lens is a hobby that I am deeply passionate about. Photography allows me to express my creativity and see the world from different perspectives.</p>
                    <img src="assets/images/photography.jpg" class="img-fluid rounded-4" alt="Photography">
                            </div>
                        </div>
						
						<div class="col-12">
							<div class="bg-base p-4 rounded-4 shadow-effect">
								<h4>Drawing</h4>
								<p class="text-brand mb-2">Drawing, whether digital or traditional, is a way for me to bring my imagination to life. It provides a creative outlet where I can explore different styles and techniques, creating unique and personal art pieces.</p>
								<img src="assets/images/drawing.jpg" class="img-fluid rounded-4" alt="Drawing">
							</div>
						</div>

                        <div class="col-12">
							<div class="bg-base p-4 rounded-4 shadow-effect">
								<h4>Photo or Video Editing</h4>
								<p class="text-brand mb-2">Photo and video editing allow me to creatively enhance visual content. It's a passion that combines technical skill with artistic expression, transforming ordinary moments into extraordinary memories.</p>
								<img src="assets/images/editing.jpg" class="img-fluid rounded-4" alt="Editing">
							</div>
						</div>

						
						
						<div class="col-12">
							<div class="bg-base p-4 rounded-4 shadow-effect">
								<h4>Designing</h4>
								<p class="text-brand mb-2">Exploring creative ideas and bringing them to life through various design tools is my passion. Designing allows me to express my creativity and innovate with visuals.</p>
								<img src="assets/images/designing.jpg" class="img-fluid rounded-4" alt="Designing">
							</div>
						</div>
						
            </div>
        </div>
    </section>
    <!-- PASSION -->

    <!-- Scripts -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script>
        AOS.init();
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
