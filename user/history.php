<?php
    session_start();
    require_once '../includes/dbh.inc.php';
    require_once '../includes/emptySession.php';
    
    emptyUserSignupSession();
    if (!isset($_SESSION['useruid'])){
      header("Location: ../forms/login.php");
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

  <style>

 
    .dtHorizontalVerticalExampleWrapper {
      max-width: 600px;
      margin: 0 auto;
    }
    
    #dtHorizontalVerticalExample th,
    td {
      white-space: nowrap;
    }
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
    bottom: 0.5em;
    }
  </style>
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


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
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
          <li class="active"><a href="profile.php">History</a></li>
          
          <?php
        if (isset($_SESSION["useruid"])) {
            # code...
            echo "<li class='drop-down'><a href=''> My Account | ". $_SESSION["useruid"] . "</a>";
            echo "<ul>";
            echo "<li><a href='profile.php'>My Profile</a></li>";
            echo "<li><a href='../forms/appointment/index.php'>Set an Appointment</a></li>";
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
        <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
            
          <h2>History</h2>
          <p>This is your recently schedule appointments.<br> Please wait for the administrator's response before approving your pending appointments.</p>
        </div>
        <?php
        if (isset($_GET["error"])) {
            # code...
            if ($_GET["error"] == "donebooking") {
                # code...
                echo "<div data-aos='fade-left' class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Appointment Scheduling pending. Please wait for the confirmation email.
            </div>";
            } 
          }
            ?>
    
<div class="table-responsive" data-aos="fade-up" data-aos-delay="200">
<table class="table">
      <thead>
        <tr>
            <th scope="col">Id #</th>
            <th scope="col">Patient</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Email</th>
            <th scope="col">Consultation</th>
            <th scope="col">Branch</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
  <?php
                            $sql = "SELECT * FROM booking;";
                            $result = mysqli_query($conn, $sql);
                            $resultChecked = mysqli_num_rows($result);

                            if($resultChecked > 0){  
                                while($row = mysqli_fetch_assoc($result)){
                                  if("Pending" === $row['bookingStatus'] or "Accepted" === $row['bookingStatus'] or "Done" === $row['bookingStatus'] ){ 
                                    if($_SESSION["useruid"] === $row['bookingUsername']){ ?>

                                       <form action="../includes/cancelbook.inc.php" method="post">  
                                   
                                            <tr>
                                                <input type="hidden" name="bookId" value="<?php echo $row['bookingId']; ?>">
                                                <th> <?php echo $row['bookingId'] ?> </th>    
                                                <td> <?php echo $row['bookingName'] ?> </td>                                
                                                <td> <?php echo $row['bookingDate'] ?> </td>
                                                <td> <?php echo $row['bookingTime'] ?> </td>
                                                <td> <?php echo $row['bookingemail'] ?> </td>
                                                <td> <?php echo $row['bookingConsultation'] ?> </td>
                                                <td> <?php echo $row['bookingBranch'] ?> </td>
                                                <td class="status">   <?php 
                                                if($row['bookingStatus'] == "Pending"){
                                                     echo '<span class="badge badge-warning">Pending</span>';}
                                                else if($row['bookingStatus'] == "Declined"){
                                                echo '<span class="badge badge-danger">Declined</span>';}
                                                else if($row['bookingStatus'] == "Accepted"){
                                                echo '<span class="badge badge-success">Accepted</span>';}
                                                else if($row['bookingStatus'] == "Done"){
                                                  echo '<span class="badge badge-info">Accepted</span>';}
                                                ?>
                                                      </td>
                                                
                                                <?php 
                                                
                                                  if($row['bookingStatus'] === "Cancelled" or $row['bookingStatus'] === "Done"){
                                                      echo '<td class = "text-center"><i class="fa fa-check-square" style="font-size:30px;color:green;"></i></td>';

                                                    }
                                                  else{
                                                      echo '<td>
                                                      <button type="submit" name="submit" class="btn btn-danger" onclick="return ConfirmDelete()">
                                                        Cancel
                                                      </button>
                                                      </td>';
                                                  }

                                                  ?>
                                                
                                                </form>   
                                              
                                                </tr>
                                        </tbody>
                            
                         
                                        
                            <?php } }} } ?>
</table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
                                                </div></div></div>


  
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

  

  <script>
    function ConfirmDelete(){
    var x = confirm("Are you sure you want to cancel your appointment?");
    if (x)
        return true;
    else
      return false;
      }
</script>
</body>
</html>