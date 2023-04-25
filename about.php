<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- faviconns -->
  <link href="faviconn.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
            <li class="active"><a href="#about.php">About Me</a></li>
            <li><a href="services.php">Services</a></li>
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

    <section class="section pb-5">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>About Us</h2>
            <p class="mb-0"></p>
          </div>

        </div>

        <!-- <div class="row">
          <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
            <h3 class="h3 mb-4">Skills</h3>
            <ul class="list-unstyled">
              <li class="mb-3">
                <div class="d-flex mb-1">
                  <strong>WordPress</strong>
                  <span class="ml-auto">80%</span>
                </div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
              <li class="mb-3">
                <div class="d-flex mb-1">
                  <strong>Photoshop</strong>
                  <span class="ml-auto">96%</span>
                </div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
              <li class="mb-3">
                <div class="d-flex mb-1">
                  <strong>HTML5/CSS3</strong>
                  <span class="ml-auto">99%</span>
                </div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
              <li class="mb-3">
                <div class="d-flex mb-1">
                  <strong>Veu</strong>
                  <span class="ml-auto">87%</span>
                </div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
              <li class="mb-3">
                <div class="d-flex mb-1">
                  <strong>Angular</strong>
                  <span class="ml-auto">85%</span>
                </div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
              <li class="mb-3">
                <div class="d-flex mb-1">
                  <strong>React</strong>
                  <span class="ml-auto">88%</span>
                </div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
            </ul>
          </div> -->

        <div class="col-md-7 mb-5 mb-md-0" data-aos="fade-up">
          <p><img src="myphoto.jpeg" alt="Image" class="img-fluid"></p>
          <h1>Hello, User</h1>
          <p>PM&E is stands for porfolio management and enquiry.</p>
          <p>We are here to provide you professinals to make your daily life smooth. You can just Hire professinals by
            just sitting on the couch.</p>
          <p>Currently we are working in cities like Ahmedabad, Surat, Vadodara, Gandhinagar. Our <span
              style="font-size:20px"><b>GOAL</b></span> is to reach to all cities of India</p>
          <p></p>
          <p><a href="https://www.ncodetechnologies.com/" class="readmore">Click here to go to our parent site</a></p>
        </div>

      </div>

      </div>

    </section>

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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