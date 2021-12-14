<?php
    session_start();
    require_once '../includes/emptySession.php';

    emptyAdminSignupSession();

    if(!isset($_GET['useruid'])){

      header("Location: signup.php?error=erroroccured");
      die();
    }
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

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

<link rel = "stylesheet" href = "../assets/css/styleLogIn.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
          <li class="active"><a href="signup.php">REGISTER</a></li>
          <li ><a href="login.php">LOG IN</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>


  </header><!-- End Header -->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
        <div class="section-title" data-aos="fade-up">
        <br> <h2>Account Verification</h2><br>
        <p>Please click the button below to <br>resend the link verification.</p><br>
        <!-- ERROR MESSAGES -->
 <?php
        if (isset($_GET["error"])) {
            # code...
            if ($_GET["error"] == "sent") {
                # code...
                echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                We've sent the <b>Verification link</b> in your email <br>Please check to verify your account</p>
              </div>";
            } 
             elseif ($_GET["error"] == "notverified") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Your Account is not yet verified.
              </div>";
            }
        }
            ?>
        
    
        <form action="includes/resendemail.inc.php" method="POST">
                <div class="input-box">
                <input type="hidden" name="username" value="<?php echo $_GET['useruid']; ?>">
                <input  class="btn btn-primary" type="submit" name="submit" value="Resend Verification Email" />
                <br>
            
                
                <br><br><br><br>
            </form>
            <div class = "bg-success text-white fixed-bottom">
            <br><p>  <b>Never share your One Time Password (OTP)</b> <br>Use it only for its intended purpose.</p>
            <p><a  class = "text-white" href="../index.php">Back to homepage</a></p>
            <br>
                                </div>
        </div>
        
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
    </body>

    
    <!-- For Checking -->
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] === "wronglogin"){ ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        width: '350',
                        title: 'Invalid account!',
                        text: ''
                    })
                </script>
            <?php }
        
            if($_GET["error"] === "incorrectpwd"){ ?>
                <script>
                    Swal.fire({
                        icon: 'info',
                        width: '350',
                        title: 'Incorrect Password!',
                        text: ''
                    })
                </script>
            <?php }
        }
    ?>


    <!-- Show Password Function -->
<script>
      function myFunction() {
         var y = document.getElementById("passwordVal");
         if (y.type === "password") {
          y.type = "text";
        } else {
            y.type = "password";
         }
        }
    </script>


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