<?php
    session_start();
    require_once '../includes/emptySession.php';
    emptyAdminLoginSession();
    emptyAdminSignupSession();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="sweetalert/jquery-3.5.1.min.js"></script>
    <script src="sweetalert/sweetalert2.all.min.js"></script>
    <title> MCY ADMIN </title>
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

<br>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
        <div class="section-title" data-aos="fade-up">
        <div class="fadeIn first">
    <br>
    <img src="../forms/img/icon.png" id="icon" alt="User Icon" />
    </div><br>
     <h2>Admin Login</h2><br>
    
          <form class="form" action="../includes/login-admin.inc.php" method="POST">
                <div class="input-box">
                    <input placeholder="Username" id="textbox" class="text-input" type="text" name="admin_username" required 
                        value="<?php 
                                    if(isset($_SESSION['login_adminUsername'])){
                                        echo htmlspecialchars($_SESSION['login_adminUsername']);
                                    }
                                ?>">
                                <br>
                </div>
                <div class="input-box">
                    <input placeholder="Password" id="passwordVal" class="text-input" type="password" name="admin_password" required maxlength="20"
                        value="<?php 
                                    if(isset($_SESSION['login_adminPassword'])){
                                        echo htmlspecialchars($_SESSION['login_adminPassword']);
                                    }
                                ?>">
                </div>
             
                <p><a href="signup-admin.php"> Create Account </a> </p>
             
                <br>
                <input type="checkbox" id = "showpass" onclick="myFunction()"> Show Password<br/><br>
                <input  class="btn btn-primary" type="submit" name="submit" value="Log In" />
                <br>
                <form action = "signup-admin.php">
                
                <br><br><br><br>
            </form>
            <div class = "bg-danger text-white fixed-bottom">
            <br><p>  This page is not for the clients.</p>
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