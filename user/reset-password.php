<?php
      session_start();
      require_once '../forms/includes/dbh.inc.php';
      require_once '../includes/emptySession.php';
      
      emptyUserSignupSession();
      

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
<!-- Pacli  -->
<link rel = "stylesheet" href = "../assets/css/styleLogIn.css">
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
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="../index.php"><b>MCY Dental Clinic</b></a></h1>
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

<br><br>
<br>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
        <div class="section-title" data-aos="fade-up">
       

                                 <br> <h2>Change Password</h2><br>
        <p>Please enter your new password below</p><br>
        <?php
        if (isset($_GET["error"])) {
            # code...
            if ($_GET["error"] == "emptyinput") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Please Fill out all the fields.
            </div>";
            } 
             elseif ($_GET["error"] == "wrongpass") {
                # code...
                echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                The password you entered is incorrect.
              </div>";
            }
            elseif ($_GET["error"] == "sameasoldpass") {
              # code...
              echo "<div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your new password cannot be <br>the same as old password.
            </div>";
          }
            elseif ($_GET["error"] == "wrong") {
              # code...
              echo "<div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Password does not match.
            </div>";
          }
            elseif ($_GET["error"] == "none") {
              # code...
              echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              You've successfully changed your password..
            </div>";
          }
            
        }


    ?>
    
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
<input type="password"  name="pass0" placeholder ="Enter Current Password" class="form-control"/>
</div>
<input type="checkbox" id = "showpass" onclick="myFunction()"> Show Password<br/>
<div class="form-group">
    <br>
    <input type="submit" name="submit" value="Change Password"  class="btn btn-primary"/>

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
<br>
            <div class = "bg-success text-white fixed-bottom">
            <br><p>A <b>Strong password</b> helps prevent unauthorized <br>access to your email account.</p>
            <p><button type="button" class="btn btn-info"><a  class = "text-white" href="../index.php">Back to homepage</a></button></p>
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
         var y = document.getElementById("newpass");
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