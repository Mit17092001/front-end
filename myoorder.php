<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Successfully applied page</title>
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
            <li><a href="home.php">Home</a></li>
            <li><a href="#about.php">About Me</a></li>
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
  <main style="text-align:center;margin-top:150px;margin-bottom:130px">
    <?php
            include('conf.php');  
            $email=$_SESSION['e-mail'];         
            $sql="SELECT * FROM `location` WHERE `email`='$email'";
            $sp=mysqli_query($conn,$sql);
            if(mysqli_num_rows($sp)>0)
            {
                ?> <table class="table"> 
                        <tr>
                            <th>Profile</th> 
                            <th>Address</th>
                            <th>email</th>
                            
                        </tr><?php
                while($sr=mysqli_fetch_assoc($sp))
                    {
                     ?> 
                    
                        <tr>
                            <td><?php echo $sr['profile'] ?></td> 
                            <td> <?php echo $sr['address']?></td>
                            <td><?php echo  $sr['email'];?></td>
                            
                        </tr>
                    
                        <?php
                        
                    } 
                    ?></table> <?php
            }
            else
            {
                echo "You have no order list. Start with your first order";
            }
    ?>
  </main>

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