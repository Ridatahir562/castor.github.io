<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Castor Technical Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo copy.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
       
            .foot{
            background-color: darkblue;
        }
        
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <!-- <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Logistica</h2>
        </a> -->
        <a href="index.php" class="ps-4  p-2"><img src="./assets/images/logo1 copy.jpg" Style="width:100px; height:80px "></a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-4" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="./kitchenhood.php" class="dropdown-item ">Kitchen Hood</a>
                        <a href="./esp.php" class="dropdown-item">ESP System</a>
                        <a href="./aquafilters.php" class="dropdown-item">AQUA Filter</a>
                        <a href="./vfd.php" class="dropdown-item">VFD Controller</a>
                        <a href="./airfilters.php" class="dropdown-item">AIR Filters</a>
                        <a href="./fahu.php" class="dropdown-item">Fresh Air Handling Unit</a>
                        <a href="./fcu.php" class="dropdown-item">Fan Coil Unit</a>
                        <a href="./ahu.php" class="dropdown-item">Air Handlind Unit</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="./clients.php" class="nav-link">Clients</a>
                </div>
                <a href="./team.php" class="nav-item nav-link">Team</a>
                <a href="./partner.php" class="nav-item nav-link">Partnership</a>
                <a href="./news.php" class="nav-item nav-link">Company News</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>+971 562 453626</h4>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header img-fluid p-4"  class="col-sm-12 col-6">
        <div class="container py-5">

            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="./index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="./about.php">About</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4" style="color: darkblue;">Contact For Any Query</h1>
                    <p class="mb-4">This form typically asks for the visitor's name, email address, subject, and a message. When the form is submitted, the website owner or administrator will receive an email with the visitor's information and message.</p>
                    <div class="bg-light p-4">
                        <form method="Post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                        <label for="name" >Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" name="phone">
                                        <label for="subject">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" name="message"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28888.871031822142!2d55.38947764065959!3d25.165801212968898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f614bffffffff%3A0x4df3dbea03d1bc60!2sP24%20France%20International%20city!5e0!3m2!1sen!2s!4v1686989231946!5m2!1sen!2s"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <!-- Footer Start -->
 <div class="container-fluid foot text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>S11, france p24,International City, Dubai</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+971 562 453626</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@castortechnical.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Products</h4>
                    <a class="btn btn-link" href="./kitchenhood.php">Kitchen Hood</a>
                    <a class="btn btn-link" href="./esp.php">ESP System</a>
                    <a class="btn btn-link" href="./aquafilters.php">AQUA Filter</a>
                    <a class="btn btn-link" href="./vfd.php">VFD Controller</a>
                    <a class="btn btn-link" href="./airfilters.php">AIR Filters</a>
                    <a class="btn btn-link" href="./fahu.php">Fresh Air Handling Unit</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="./index.php">Home</a>
                    <a class="btn btn-link" href="./about.php">About Us</a>
                    <a class="btn btn-link" href="./service.php">Services</a>
                    <a class="btn btn-link" href="./service.php">Services</a>
                    <a class="btn btn-link" href="./team.php">Teams</a>
                    <a class="btn btn-link" href="./contact.php">Contect</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Caster Technical Services (CTS).</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 ">
                        &copy; <a class="border-bottom" href="#">Caster Technical Services</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="border-bottom" href="">HTML Codex</a>
                     -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<?php

include "connection.php";

if (isset($_POST['submit'])) {
	$names = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$insertquery = "INSERT INTO `contact`(`id`, `name`, `email`, `phone`, `message`) VALUES 
	(' ','$names','$email','$phone','$message')";

	$result = mysqli_query($conn, $insertquery);

	if ($result) {
		// header('location: index.php');
		// echo"data added";
	} else {
?>
		<script>
			alert("No ! record crated...");
		</script>
<?php
	}
}
?>