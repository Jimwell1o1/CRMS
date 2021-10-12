<?php
    session_start();
    require_once '../includes/emptySession.php';

    emptyAdminLoginSession();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="sweetalert/jquery-3.5.1.min.js"></script>
    <script src="sweetalert/sweetalert2.all.min.js"></script>
    <title> MCY ADMIN </title>


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
</head>


    <body>
  
    <div class="wrapper fadeInDown">
  <div id="formContent">
            <form class="form" action="../includes/signup-admin.inc.php" method="POST">
            <br>
                <h2> Admin Registration</h2><br>
                <div class="input-box">
                    <input id="textbox" class="text-input" type="text" name="admin_name" placeholder="Full Name" required
                        value="<?php 
                                    if(isset($_SESSION['admin_name'])){
                                        echo htmlspecialchars($_SESSION['admin_name']);
                                    }
                                ?>">
                 
                </div>
                <div class="input-box">
                    <input id="textbox" class="text-input" type="text" name="admin_email" placeholder="Email" required
                        value="<?php 
                                    if(isset($_SESSION['admin_email'])){
                                        echo htmlspecialchars($_SESSION['admin_email']);
                                    }
                                ?>">
           
                </div>

                <div class="input-box">
                <select class="text-input" name="admin_branchName">
                <option value="" disabled selected>Select Branch</option>
                <option value = "Malinao">Malinao</option>    
                <option value = "Pinagbuhatan">Pinagbuhatan</option>  
                <option value = "San Joaquin">San Joaquin</option>        
                </select>

                  
                
                </div>

                <div class="input-box">
                    <input id="textbox" class="text-input" type="text" name="admin_uid" placeholder="UserName" required
                        value="<?php 
                                    if(isset($_SESSION['admin_uid'])){
                                        echo htmlspecialchars($_SESSION['admin_uid']);
                                    }
                                ?>">
                
                </div>
                <div class="input-box">
                    <input  id="passwordVal" class="text-input" type="password" placeholder="Password" name="admin_password" required
                        value="<?php 
                                    if(isset($_SESSION['admin_password'])){
                                        echo htmlspecialchars($_SESSION['admin_password']);
                                    }
                                ?>">
                    
    
                </div>
                <div class="input-box">
                    <input  id="confirmVal" class="text-input" type="password" placeholder="Confirm Password" name="admin_confirmpassword" required
                        value="<?php 
                                    if(isset($_SESSION['admin_confirmpassword'])){
                                        echo htmlspecialchars($_SESSION['admin_confirmpassword']);
                                    }
                                ?>">
                
                </div> 
                <input type="checkbox" id = "showpass" onclick="myFunction()"> Show Password<br/><br>
                <span> Already have an account? <a href="login-admin.php"> Login here </a> </span> 
                <input class="submit-button" type="submit" name="submit" value="Sign Up" required>
               
            </form>
        </div>
    </body>

    
    <!-- For Checking -->

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] === "invalidemail"){ ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        width: '350',
                        title: 'Invalid email!',
                        text: ''
                    })
                </script>
            <?php }

            if($_GET["error"] === "emailtaken"){ ?>
                <script>
                    Swal.fire({
                        icon: 'warning',
                        width: '350',
                        title: 'Email is already taken!',
                        text: ''
                    })
                </script>

            <?php }

            if($_GET["error"] === "mustbeallcaps"){ ?>
                <script>
                    Swal.fire({
                        icon: 'warning',
                        width: '350',
                        title: 'Branch must be all caps!',
                        text: ''
                    })
                </script>

            <?php }

            if($_GET["error"] === "usernametaken"){ ?>
                <script>
                    Swal.fire({
                        icon: 'warning',
                        width: '350',
                        title: 'Username is already taken!',
                        text: ''
                    })
                </script>
            <?php }

            if($_GET["error"] === "invaliduid"){ ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        width: '350',
                        title: 'Invalid Username!',
                        text: ''
                    })
                </script>
            <?php }
            
            if($_GET["error"] === "passwordsdontmatch"){ ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        width: '350',
                        title: "Password doesn't match!",
                        text: ''
                    })
                </script>
            <?php }
            
            if($_GET["error"] === "stmtfailed"){ ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        width: '350',
                        title: 'Something went wrong!',
                        text: ''
                    })
                </script>
            <?php }

            if($_GET["error"] === "none"){ ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        width: '350',
                        title: 'Account successfully created!',
                        text: ''
                    })
                </script>
                
            <?php }

                $_SESSION['name'] = "";
                $_SESSION['email'] = "";
                $_SESSION['uid'] = "";
                $_SESSION['password'] = "";
                $_SESSION['confirmpassword'] = "";
        }
    ?>

<!-- Show Password Function -->
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

</div></div>
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
    </script>
</html> 