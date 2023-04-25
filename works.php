<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Work page</title>
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
            <li><a href="services.php">Services</a></li>
            <li class="active"><a href="works.php">Works</a></li>
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
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-milk.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Milk-man</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="milk man.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="Home-maid.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Cleaning Services</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="House maid.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-car.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Carpenter</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="carpenter.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-news.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>News-paper</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="news paper.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-reno.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Home-renovation</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="painterr.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single-pest.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Pest control</h3>
                <span></span>
              </div>
              <img class="img-fluid" src="pest-con.jpg">
            </a>
          </div>
        </div>
      </div>
    </section><!-- End  Works Section -->

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