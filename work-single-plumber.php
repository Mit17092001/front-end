<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Plumber</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- faviconns -->
  <link href="faviconn.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/stylee.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyPortfolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="#about.php">About Me</a></li>
            <li class="active"><a href="services.php">Services</a></li>
            <li><a href="works.php">Works</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><button onclick="myfunction()" style="background-color:#0d1e2d; color: white;padding-left:0px; border:none;">Log-out</button></li>
            <script>
              function myfunction()
            {
                if (confirm("Really want to logout !!")) 
                {
                    window.location.assign("logout.php")
                } 
                else 
                {
                    window.location.assign("home.php")
                }
            }
            </script>
          </ul>
        </div>
        
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="home.php"><img src="faviconn.png"> Portfolio Management & Enquiry ..</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">

    <section class="section">
      <div class="container">
        <div class="row mb-4 align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2></h2>
            <p></p>
          </div>
        </div>
      </div>

      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="plumber.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h3">PLUMBER</h3>
                <p class="mb-4"><span class="text-muted">Plumber</span></p>

                <div class="mb-5">
                  <p>If you have any issue related to Plumbing hire person to solve your problem by sitting on couch.</p>

                </div>

                <h4 class="h4 mb-3">What I did</h4>
                <ul class="list-unstyled list-line mb-5">
                  <li>Pipe fitting</li>
                  <li>Tap fitting</li>
                  <li>geyser service</li>
                  <li>instalation of bathroom sink and vanity</li>
                </ul>

                <p><a href="Hire.php?id=plumber" class="readmore">Hire Plumber</a></p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- ======= Testimonials Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1"></p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
          -->
            
          </div>
        </div>
        <div class="col-sm-6 social text-md-end">
          <a href="#"><span class="bi bi-twitter"></span></a>
          <a href="#"><span class="bi bi-facebook"></span></a>
          <a href="#"><span class="bi bi-instagram"></span></a>
          <a href="#"><span class="bi bi-linkedin"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>