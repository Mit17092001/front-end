<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Address Details</title>
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
  <?php

    include("conf.php");
            
            {
                    $email=$_SESSION['e-mail'];
                    // $pno=$_GET['id'];
                    // $sql="SELECT * FROM `profile` WHERE `No`=$pno";
                    // $op=mysqli_query($conn,$sql);
                    // $row=mysqli_fetch_assoc($op);
                    $mql="SELECT * from `sub` where `e-mail`='$email'";
                    $mp=mysqli_query($conn,$mql);
                    if(mysqli_num_rows($mp)==0)
                    {
                        header("location:subscription.php");
                    }
                    
                    
                  }
                  ?>
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
            <li><a href="logout.php">Logout</a></li>
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
  <form method="POST" style="margin:auto; margin-top:100px;width:400px;margin-bottom:60px;">
            <table>
                <tr>
                    <td>Address</td><td>:</td><td> <textarea name="add" rows="5" cols="31" required></textarea></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                        :
                    </td>
                    <td>  <select name="city">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Surat">Surat</option>
                            <option value="vadodara">vadodara</option>
                            <option value="Gandhinagar">Gandhinagar</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>pincode</td><td>:</td><td> <input type="number" name="pin" required></td> 
                </tr>
                </table>
                <div class="field" style="width:80%;height:50px;margin:auto;margin-top:20px">
                    <button type="submit" name="submit" style="height:100%;width:100%;background-color:mediumseagreen; border:none; ">submit</button>
                </div>
        </form>
        <?php
          include('conf.php');
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $add=$_POST['add'];
                $city=$_POST['city'];
                $state= "Gujarat";
                $country="India";
                $pin=$_POST['pin'];
                $sql="INSERT INTO `location`(`address`, `city`, `pin-code`) VALUES ('$add','$city','$pin') ";
                $sp=mysqli_query($conn,$sql);
                header("location:http://localhost/php/myportfolio/ack.php");
            }
        ?>

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