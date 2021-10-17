<?php
    session_start();
    require_once '../forms/includes/dbh.inc.php';

    if (!isset($_SESSION['useruid'])){
      header("Location: ../forms/login.php");
      die();
  }
    
    $usersName = "";
    $usersEmail = "";
    $usersUsername = "";
    $usersPwd = $_SESSION["userPassword"];

    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultChecked = mysqli_num_rows($result);

    if($resultChecked > 0){  
        while($row = mysqli_fetch_assoc($result)){
            if($_SESSION["useruid"] === $row['usersUid']){

                $_SESSION["ID"] = $row["usersId"];
                $usersName = $row["usersName"];
                $usersEmail = $row["usersEmail"];
                $usersUsername = $row["usersUid"];
                
                $usersPwd = $_SESSION["userPassword"];

                $_SESSION['usersName'] = $row["usersName"];
                $_SESSION['usersEmail'] = $row["usersEmail"];
            } 
        } 
    }
    
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="../index.php">MCY Dental Clinic</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="profile.php">My Profile</a></li>
          
          <?php
        if (isset($_SESSION["useruid"])) {
            # code...
            echo "<li class='drop-down'><a href=''> My Account | ". $_SESSION["useruid"] . "</a>";
            echo "<ul>";
            echo "<li><a href='profile.php'>My Profile</a></li>";
            echo "<li><a href='../booking.php'>Set an Appointment</a></li>";
            echo "<li><a href='history.php'>History</a></li>";
            echo "<li><a href='../forms/includes/logout.inc.php'>Log Out</a></li>";
            echo "</ul></li>";
        }
        else {
            # code...
            echo "<li><a href='forms/signup.php'>REGISTER</a></li>";
            echo "<li><a href='forms/login.php'>LOG IN</a></li>";
        }
       
    ?>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<br><br><br>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
        <div class="section-title" data-aos="fade-up">
       
        <?php
                //   $con = mysqli_connect("localhost", "root", "", "phpproject01");
                //   if (mysqli_connect_errno()) {
                //       echo "Failed to connect to MySQL: " . mysqli_connect_error();
                //       die();
                //   }

                //   $error = "";
                //     if (isset($_POST["submit"])) {
                       
                //         $email = $_POST["email"];
                //         $curDate = date("Y-m-d H:i:s");
                       
                //         if ($row == "") {
                //             $error .= '<div class="section-title" data-aos="fade-up">
                //             <br> <h2>Invalid Link</h2><br><br><br></div>';
                //         } else {
                //             $row = mysqli_fetch_assoc($query);
                //             $expDate = $row['expDate'];
                //             if ($expDate >= $curDate) {
                                ?> 
                                 <br> <h2>Reset Password</h2><br>
        <p>Please enter your new password below.</p><br>
           <form method="post" action="../includes/changepass.inc.php" name="update">

           <input type="hidden" name="action" value="update" class="form-control"/>

         

<div class="form-group">

    <input type="password" id="passwordVal" name="pass1" placeholder ="New Password" class="form-control"/>
</div>

<div class="form-group">

    <input type="password" id="confirmVal" name="pass2" placeholder ="Confirm New Password"  class="form-control"/>
</div>
<input type="hidden" name="email" value="<?php echo $email; ?>"/>
<div class="form-group">
<br>
<input type="password" id="confirmVal" name="pass0" placeholder ="Current Password" class="form-control"/>
</div>
<input type="checkbox" id = "showpass" onclick="myFunction()"> Show Password<br/>
<div class="form-group">
    <br>
    <input type="submit" name="submit" value="Change Password"  onclick="return Validate()" class="btn btn-primary"/>

    <script>
      function myFunction() {
         var x = document.getElementById("passwordVal");

         if (x.type === "password") {
          x.type = "text";
         
        } else {
            x.type = "password";
          
         }
        }
    </script>
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
</div>
<br><br><br>
</form>
            <?php
                    //         } else {
                                
                    //             $error .= '<div class="section-title" data-aos="fade-up">
                    //             <br> <h2>Link Expired.</h2><br><br><br></div>';
                    //         }
                    //     }
                    //     if ($error != "") {
                    //         echo "<br><br><br><div class='error'>" . $error . "</div><br />";
                    //     }
                    // }


                    // if (isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"] == "update")) {
                    //     $error = "";
                    //     $pass1 = mysqli_real_escape_string($con, $_POST["pass1"]);
                    //     $pass2 = mysqli_real_escape_string($con, $_POST["pass2"]);
                    //     $email = $_POST["usersEmail"];
                    //     $curDate = date("Y-m-d H:i:s");
                    //     if ($pass1 != $pass2) {
                    //         $error .= "<p>Password do not match, both password should be same.<br /><br /></p>";
                    //     }
                    //     if ($error != "") {
                    //         echo $error;
                    //     } else {

                    //         $pass1 = password_hash($pass1, PASSWORD_DEFAULT);
                    //         mysqli_query($con, "UPDATE `users` SET `usersPwd` = '" . $pass1 . "' WHERE `usersEmail` = '" . $email . "'");

                    //         mysqli_query($con, "DELETE FROM `password_reset_temp` WHERE `usersEmail` = '$email'");

                    //         echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>';
                    //         header("Location: ../index.php");
                    //     }
                    // }
                    ?>
            <div class = "bg-success text-white fixed-bottom">
            <br><p>A <b>Strong password</b> helps prevent unauthorized <br>access to your email account.</p>
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