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
 
    <!-- Login Form -->
    <form action = "includes/signup.inc.php" method="POST">
      <input type="text" id="textbox" class="fadeIn third" name="name" placeholder="Full Name">
      <input type="text" id="textbox" class="fadeIn third" name="email" placeholder="Email">
      <input type="text" id="textbox" class="fadeIn third" name="uid" placeholder="Username">
      <input type="password" id="passwordVal" class="fadeIn third" name="pwd" placeholder="Password">
      <input type="password" id="confirmVal" class="fadeIn third" name="pwdrepeat" placeholder="Confirm Password"><br/>
      <input type="checkbox" id = "showpass" onclick="myFunction()"> Show Password<br/>
 
      <input type="submit" class="fadeIn fourth" value="Register" name = "submit" >
      <!-- //onclick="return Validate()" -->
      <br>
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
            elseif ($_GET["error"] == "none") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Congratulations! You've successfully signed up.
              </div>";
            }
        }
?>
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