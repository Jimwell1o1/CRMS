<?php
    session_start();
    require_once '../includes/emptySession.php';

    emptyUserSignupSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MCY Dental Clinic</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">

  <!-- Pacli  -->
<link rel = "stylesheet" href = "../assets/css/styleLogIn.css">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
      <h1 class="text-light"><a href="../index.php"><b>MCY Dental Clinic</b></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="../index.php">Home</a></li>
          <li><a href="../index.php#about">Intro</a></li>
          <li class="drop-down"><a href="../index.php#about">About Us</a>
            <ul>
              <li><a href="../index.php#priorities">Our Priorities</a></li>
              <li><a href="../index.php#steps">How to Appoint?</a></li>
            </ul>
          </li>
          <li><a href="../index.php#services">Services</a></li>
          <li><a href="../index.php#portfolio">Gallery</a></li>
          <li><a href="../index.php#contact">Contact Us</a></li>
          <li><a href="signup.php">REGISTER</a></li>
          <li class="active"><a href="login.php">LOG IN</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

    </div>


  </header><!-- End Header -->


  <br><br><br>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

   
    <!-- Icon -->
    <div class="fadeIn first">
    <br><br>
    <img src="img/icon.png" id="icon" alt="User Icon" />
    </div>
    
    <!-- Login Form -->
    <form action="includes/login.inc.php" method="post">
      <input type="text" id="textbox"  class="fadeIn second" name="uid" placeholder="Username/Email">
      <input type="password" id = "myInput" class="fadeIn third" name="pwd" placeholder="Password"><br/><br/>
      <p class="fadeIn fourth"><input type="checkbox" id = "showpass" onclick="myFunction()" class="fadeIn fourth"> Show Password</p><br/>
      
      <input type="submit" class="fadeIn fourth" value="Log In" name = "submit"><br/>
      <a class="underlineHover" href="#">Forgot Password?</a><br>
      <a class="underlineHover" href="../admin/login-admin.php">Log in as admin</a><br><br>
      <a class="underlineHover" href="../admin_new/index.php">New admin</a>

    </form>
    <?php
        if (isset($_GET["error"])) {
            # code...
            if ($_GET["error"] == "emptyinput") {
                # code...
                echo "<p>FILL IN ALL FIELDS!</p>";
            } 
             elseif ($_GET["error"] == "wronglogin") {
                # code...
                echo "<p>INCORRECT LOG IN INFORMATION!</p>";
            }
            
        }


    ?>


    <!-- Remind Password -->
    <div id="formFooter">
    <div class="fadeIn fourth">
    Don't have account? <br>
    </div>
    <form action = "signup.php">
      <input type="submit" class="fadeIn fourth" value="Register">
        </form>

    <!--Script for showpass-->
      <script>
      function myFunction() {
         var x = document.getElementById("myInput");
         if (x.type === "password") {
          x.type = "text";
        } else {
            x.type = "password";
         }
        }
    </script>
    </div>
    </form>

  </div>
</div>





  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body></html>