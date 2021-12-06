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

  <br><br><br>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
  
 
    <!-- Icon -->
    <div class="section-title fadeIn first">  
    <br>
    <h2>Create an Account</h2>
  
 <br>

  <!-- ERROR MESSAGES -->
 <?php
        if (isset($_GET["error"])) {
            # code...
            if ($_GET["error"] == "emptyinput") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Kindly please fill out all the fields.
              </div>";
            } 
             elseif ($_GET["error"] == "invaliduid") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Please choose a proper username.
              </div>";
            }
            elseif ($_GET["error"] == "invalidemail") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Please enter a correct email.
              </div>";
            }
            elseif ($_GET["error"] == "passwordsdontmatch") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Password does not match, please try again.
              </div>";
            }
            elseif ($_GET["error"] == "usernametaken") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  Username is already taken, please try again.
              </div>";
            }
            elseif ($_GET["error"] == "uidlimit") {
              # code...
              echo "<div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Username must not exceed at 12 characters .
            </div>";
          }
            elseif ($_GET["error"] == "usestrngpass") {
              # code...
              echo "<div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
               Please use a Strong Password.
            </div>";
          }
          elseif ($_GET["error"] == "nocaptcha") {
            # code...
            echo "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
             Please complete the captcha below.
          </div>";
        }
            elseif ($_GET["error"] == "none") {
                # code...
                echo "<div class='alert alert-warning alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                We've sent an email to verify your account,<br>kindly please check your email.
              </div>";
            }
            elseif ($_GET["error"] == "verifysuccessful") {
              # code...
              echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Account successfully verified, you can now log in.
            </div>";
          }
          elseif ($_GET["error"] == "erroroccured") {
            # code...
            echo "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            Something went wrong, please try again later.
          </div>";
        }
        }
?>
 
    <!-- Login Form -->
    <form action = "includes/signup.inc.php" method="POST">
      <input type="text" id="textbox" class="fadeIn third" id="validationCustom01" name="name" placeholder="Full Name" value="<?php
       if (isset($_GET["name"]) && $_GET["name"] !== "empty"){
         echo $_GET["name"];
        }
      ?>"><br>
      <?php
      if (isset($_GET["name"])){
          if ($_GET["name"] == "empty") {
            # code...
            echo '<small><span class="fadeIn third text-danger">*Name is required</span></small>';
        } 
      }
      ?>

      <input type="text" id="textbox" class="fadeIn third" name="email" placeholder="Email"value="<?php
       if (isset($_GET["email"]) && $_GET["email"] !== "empty"){
         echo $_GET["email"];
        }
      ?>"><br>
      <?php
      if (isset($_GET["email"])){
          if ($_GET["email"] == "empty") {
            # code...
            echo '<small><span class="fadeIn third text-danger">*Email is required</span></small>';
        } 
      }
      ?>
      <input type="text" id="textbox" class="fadeIn third" name="uid" placeholder="Username" min="6" maxlength="12" value="<?php
       if (isset($_GET["username"]) && $_GET["username"] !== "empty"){
         echo $_GET["username"];
        }
      ?>"><br>
      <?php
      if (isset($_GET["username"])){
          if ($_GET["username"] == "empty") {
            # code...
            echo '<small><span class="fadeIn third text-danger">*Username is required</span></small>';
        } 
      }
      ?>
      <input type="password" id="passwordVal" class="fadeIn third" name="pwd" placeholder="Password"><br>
      <?php
      if (isset($_GET["pwd"])){
          if ($_GET["pwd"] == "empty") {
            # code...
            echo '<small><span class="fadeIn third text-danger">*Password is required</span></small>';
        } 
      }
      ?>
      <input type="password" id="confirmVal" class="fadeIn third" name="pwdrepeat" placeholder="Confirm Password"><br/>
      <?php
      if (isset($_GET["pwdrepeat"])){
          if ($_GET["pwdrepeat"] == "empty") {
            # code...
            echo '<small><span class="fadeIn third text-danger">*Confirm password is required</span></small><br>';
        } 
      }
      ?>
      <input type="checkbox" id = "showpass" onclick="myFunction()"> Show Password
      <br>
<!-- 
      <p style="margin-top: 5em; font-size: 0.7em;"><input type="checkbox" id = "showpass" onclick="myFunction()">  I have read and agree to the <a target="_blank" href="../../policy/privacy.php">Privacy Policy</a> <br>and  <a target="_blank" href="../../policy/terms.php">Terms of Service</a>.</p><br/> -->
      <br>
      <div class="g-recaptcha d-flex justify-content-center" data-sitekey="6LdDOTkdAAAAAJvyTa8sZJ0qMxAy1XRdPw6D96NZ"></div>
      <input type="submit" class="fadeIn fourth" value="Register" name = "submit" >
      <!-- //onclick="return Validate()" -->
      <br>

     
  
      <label for="">Already a member? <a href="login.php">Log In</a></label>
     <script>
      function myFunction() {
         var x = document.getElementById("confirmVal");
         var y = document.getElementById("passwordVal");
         if (x.type === "password") {
          x.type = "text";
          y.type = "text";
        } else {
            x.type = "password";
            y.type = "password";
         }
        }
    </script>
    
    <!--validation -->

    <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("passwordVal").value;
        var confirmPassword = document.getElementById("confirmVal").value;

        if (password =="") {
            alert("Field cannot be empty.");
            return false;
        }
       else if(password != confirmPassword){
        alert("Password do not match.");
        return false;
       }
        else if(password == confirmPassword){
        alert("Password match.");
          

        
        }
        return true;
    }
</script>





 

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