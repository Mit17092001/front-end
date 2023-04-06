<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- faviconns -->
  <link href="faviconn.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>        

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
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="#about.php">About Me</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="works.php">Works</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Log-out</a></li>
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

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-5 mb-4 mb-lg-0" data-aos="fade-up">
            <h2>Hey User</h2>
            <p class="mb-0">We are here to make your day smoother !!</p>
          </div>
          <div class="col-md-12 col-lg-7 text-start text-lg-center" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a href="#" data-filter="*" class="active">All</a>
              <a href="#" data-filter=".web">cleaning service<br>& pest control</a>
              <a href="#" data-filter=".design">Home service<br>& security</a>
              <a href="#" data-filter=".branding">Plumbers &<br>carpenters</a>
              <a href="#" data-filter=".photography">Electricians<br>Appliance repair</a>
            </div>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-plumber.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Plumber</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="plumber.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-gardner.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Gardner</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="gardner.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-electrician.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Electrician</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="electrician.jpeg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-security.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>security-Guard</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="security3.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-sitter.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Baby sitter</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="baby sitter.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-mechanic.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>mechanic</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="mechanic.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4" style="margin-top:50px;font-size:30px">
            <a href="works.php" class="item-wrap fancybox">
              See More...
            </a>
          </div>
        </div>
      </div>
    </section><!-- End  Works Section -->

    <!-- ======= Clients Section ======= -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-5">
            <h3 class="h3 heading">Cities we are contributing </h3>
            <p>Currenty we are contributing in Major cities of Gujarat. Our goal is to become best home service site in India. </p>
          </div>
        </div>
        <div class="row">
          <div class="col-4 col-sm-4 col-md-3">
            <a href="#" class="client-logo"><img src="Ahmedabad.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-3">
            <a href="#" class="client-logo"><img src="vadodara.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-3">
            <a href="#" class="client-logo"><img src="surat.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-3">
            <a href="#" class="client-logo"><img src="gandhinagar.jpg" alt="Image" class="img-fluid"></a>
          </div>
          
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section class="section services">
      <div class="container">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-5">
            <h3 class="h3 heading">Our Services</h3>
            <p>In <span><b>Phase-1</b></span> we are providing basic needs for daily life. In <span><b>Phase-2</b></span> we are planning to go for luxurious service</p>
          </div>
        </div>
        <div class="row">

          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <i class="bi bi-paint-bucket"></i>
            <h4 class="h4 mb-2">Cleaning Service & pest control</h4>
            <p>We are providing different kind of cleaning services and pest control.</p><bR>
            <ul class="list-unstyled list-line">
              <li>Home cleaning</li>
              <li>Car cleaning</li>
              <li>Laundry</li>
              <li>Dish washing maids</li>
              <li>Office cleaning</li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <i class="bi bi-house"></i>
            <h4 class="h4 mb-2">Home service & security</h4>
            <p>We are here to provide you security and basic needs for daily life.</p><br>
            <ul class="list-unstyled list-line">
              <li>security-Guard</li>
              <li>Milk-man</li>
              <li>News-paper services</li>
              <li>Home painting service</li>
              <li>Renovation services</li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <i class="bi bi-tools"></i>
            <h4 class="h4 mb-2">Plumbing & carpentry</h4>
            <p>We have skilled plumbers and carpenters which can make your house running and attractive. </p>
            <ul class="list-unstyled list-line">
              <li>Plumbing service</li>
              <li>carpentry service</li>
              <li>Celling-POP design & service</li>
              
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <i class="bi bi-lightning-charge"></i>
            <h4 class="h4 mb-2">Electricians & Appliance repair</h4>
            <p>We can make your house safe from electricity.</p><br><br>
            <ul class="list-unstyled list-line">
              <li>AC repair</li>
              <li>Wiring Earthing</li>
              <li>Appliance repair</li>
              <li>eletronic device service</li>
              <li>TV repair</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section pt-0">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>This website is really amazing. This site solved my so many daily life problem.I am waiting for phase-2 of this site.</p>
                  </blockquote>
                  <p>&mdash; Jean Hicks</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Thank you so much PM&E for being there in problems.</p>
                  </blockquote>
                  <p>&mdash; Chris Stanworth</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

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