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
            echo "<li><a href='forms/Medicio/index.php'>Set an Appointment</a></li>";
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

<br>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

   
    <!-- Icon -->
    <div class="fadeIn first">
    <br><br>
    <img src="../forms/img/icon.png" id="icon" alt="User Icon" />
    </div>
    <br>
      <!-- Login Form -->
      <form class="fadeIn second" action="../includes/myAccount.inc.php" method="post">
    <label>Name:</label><br><input class="fadeIn second" id="textbox" type="text" name="name"  value="<?php echo $usersName ?>"><br>
    <label>Email:</label><br><input class="fadeIn second" id="textbox" type="text" name="email"  value="<?php echo $usersEmail ?>"><br>
    <br>
      <input type="submit" class="fadeIn fourth" value="Update Account" name="save-submit"><br/>
    
    </form>

    <form action="reset-password.php" method="POST">

      <input type="submit" class="btn btn-outline-primary fadeIn fourth" value="Change Password" name="submit"><br/>
    
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

    </body>
    </html>