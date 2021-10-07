<?php
    session_start();
    require_once '../includes/emptySession.php';

    emptyAdminSignupSession();
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
</head>

    
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="../index.php">MCY Dental Clinic</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="profile.php">Admin Log In</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<br><br><br>
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Administrator Side</h2>
    
          <form class="form" action="../includes/login-admin.inc.php" method="POST">
                <h2> Login </h2>
                <div class="input-box">
                    <input placeholder="Username" class="text-input" type="text" name="admin_username" required 
                        value="<?php 
                                    if(isset($_SESSION['login_adminUsername'])){
                                        echo htmlspecialchars($_SESSION['login_adminUsername']);
                                    }
                                ?>">
                                <br>
                </div>
                <div class="input-box">
                    <input placeholder="Password" id="password" class="text-input" type="password" name="admin_password" required maxlength="20"
                        value="<?php 
                                    if(isset($_SESSION['login_adminPassword'])){
                                        echo htmlspecialchars($_SESSION['login_adminPassword']);
                                    }
                                ?>">

                    <span id="show-password" class="far fa-eye-slash"></span>
                    <span id="hide-password" class="far fa-eye" style="display:none"></span>
                </div>
                <br>
                <input  class="btn btn-outline-primary" type="submit" name="submit" value="Log In">
                <br><br>
                <span> <a href="signup-admin.php"> Create Account </a> </span>
            </form>

            <br><br><br> <br><br><br><br><br> <br><br><br><br><p>  This page is not for the clients. </p>
            <p><a href="../index.php">Back to homepage</a></p>
            <br><br><br><br>   <br><br><br><br>   <br><br><br><br>  
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


    <!-- Show and Hide password -->
    <script>
        const showPassword = document.getElementById("show-password");
        const hidePassword = document.getElementById("hide-password");
        const password = document.getElementById("password");

        showPassword.addEventListener("click", function(){
            if(password.type === "password"){
                password.setAttribute("type", "text");
                showPassword.style.display = "none";
                hidePassword.style.display = "block";
            }
        });

        hidePassword.addEventListener("click", function(){
            if(password.type === "text"){
                password.setAttribute("type", "password");
                hidePassword.style.display = "none";
                showPassword.style.display = "block";
            }
        });
    </script>


</html>