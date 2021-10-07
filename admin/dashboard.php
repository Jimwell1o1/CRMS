<?php
    session_start();
    require_once '../includes/dbh.inc.php';
    require_once '../includes/emptySession.php';

    emptyAdminLoginSession();
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
<body>
    
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="../index.php">MCY Dental Clinic</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
       <ul>
          <li class="active"><a href="dashboard.php">Dashboard</a>
          <li class="active"><a href="dashboard.php">Pending Schedules</a>
          <li class="active"><a href="dashboard.php">Pending Schedules</a>
          <li><a href="history.php">History</a>
          <li class="drop-down"><a href="dashboard.php">Admin</a>
            <ul>
              <li><a href="../includes/logout-admin.inc.php">Log Out</a></li>
            </ul> </li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<br><br>

     
                <!-- Pending Schedule container -->
 <section id="services" class="services section-bg" >
      <div class="container">

        <div class="section-title" data-aos="fade-right">
            
          <h2>Pending Schedules</h2>
          <p>PENDING DASHBOARD<br> Requested appointments of the users.</p>
        </div>
        <table class="table" data-aos="fade-left">
                                    <thead class="thead-light">
                                            <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Procedure</th>
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
                                    if("Pending" === $row['bookingStatus']){ ?>
                                     
                                            <tbody>
                                            <tr>
                                            <th scope="row"> <?php echo $row['bookingName'] ?> </th>
                                                <td> <?php echo $row['bookingGender'] ?> </td>
                                                <td> <?php echo $row['bookingDate'] ?> </td>
                                                <td> <?php echo $row['bookingTime'] ?> </td>
                                                <td> <?php echo $row['bookingConsultation'] ?> </td>
                                                <td> <?php echo $row['bookingBranch'] ?> </td>
                                                <td class="status"> 
                                                    <?php if($row['bookingStatus'] == 'Pending'): ?>
                                                        <span class="badge badge-warning">Pending Request</span>
                                                    <?php endif ?>
                                                    <?php if($row['bookingStatus'] == 'Accepted'): ?>
                                                        <span class="badge badge-primary">Confirmed</span>
                                                    <?php endif ?>
                                                    <?php if($row['bookingStatus'] == 'Declined'): ?>
                                                        <span class="badge badge-danger">Declined</span>
                                                    <?php endif ?>
                                                    <?php if($row['bookingStatus'] == 'Done'): ?>
                                                        <span class="badge badge-info">Done</span>
                                                    <?php endif ?>
                                                </td>
                                                
                                                <td> 
                                                    <form action="../includes/updatePendingData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
                                                        <button class="btn btn-outline-primary"id="accept-button" name="submit"> Update </button> 
                                                        <button class="btn btn-outline-danger"> Delete </button> 
                                                    </form>
                                                </td>
                                                </tbody>
                                       

                            <?php } } } ?></table>
                   

                </div>
   <!-- Accepted Schedule container -->
   <section id="services" class="services section-bg" >
                <div class="container">

                    <div class="section-title" data-aos="fade-right">
                        
                    <h2>Accepted Schedules</h2>
                    <p>ACCEPTED DASHBOARD<br> Accepted appointments of the users.</p>
                    </div>
                        <!-- Accepted Schedule container -->
                        <div class="right" id="declined">
                            <div class="booking">
                           
                        <?php
                            $sql = "SELECT * FROM booking;";
                            $result = mysqli_query($conn, $sql);
                            $resultChecked = mysqli_num_rows($result);
?>  <table class="table" data-aos="fade-left">
<thead class="thead-light">
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Procedure</th>
        <th scope="col">Branch</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
        </tr>
        </thead>
        <?php
                            if($resultChecked > 0){  
                                while($row = mysqli_fetch_assoc($result)){
                                    if("Accepted" === $row['bookingStatus']){ ?>
                                  <tbody>
                                            <tr>
                                            <th scope="row"> <?php echo $row['bookingName'] ?> </th>
                                                <td> <?php echo $row['bookingGender'] ?> </td>
                                                <td> <?php echo $row['bookingDate'] ?> </td>
                                                <td> <?php echo $row['bookingTime'] ?> </td>
                                                <td> <?php echo $row['bookingConsultation'] ?> </td>
                                                <td> <?php echo $row['bookingBranch'] ?> </td>
                                                <td class="status"> 
                                                    <?php if($row['bookingStatus'] == 'Pending'): ?>
                                                        <span class="badge badge-warning">Pending Request</span>
                                                    <?php endif ?>
                                                    <?php if($row['bookingStatus'] == 'Accepted'): ?>
                                                        <span class="badge badge-primary">Confirmed</span>
                                                    <?php endif ?>
                                                    <?php if($row['bookingStatus'] == 'Declined'): ?>
                                                        <span class="badge badge-danger">Declined</span>
                                                    <?php endif ?>
                                                    <?php if($row['bookingStatus'] == 'Done'): ?>
                                                        <span class="badge badge-info">Done</span>
                                                    <?php endif ?>
                                                </td>
                                                
                                                <td> 
                                                    <form action="../includes/updatePendingData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
                                                        <button class="btn btn-outline-primary"id="accept-button" name="submit"> Update </button> 
                                                        <button class="btn btn-outline-danger"> Delete </button> 
                                                    </form>
                                                </td>
                                                </tbody>
                                       

                            <?php } } } ?></table>
                    </div>  
            
                <!-- Declined Schedule container -->
            <section id="services" class="services section-bg" >
                <div class="container">

                    <div class="section-title" data-aos="fade-right">
                        
                    <h2>Declined Schedules</h2>
                    <p>DECLINED DASHBOARD<br> Declined appointments of the users.</p>
                    </div>
                        <!-- Declined Schedule container -->
                        <div class="right" id="declined">
                            <div class="booking">
                           
                        <?php
                            $sql = "SELECT * FROM booking;";
                            $result = mysqli_query($conn, $sql);
                            $resultChecked = mysqli_num_rows($result);
?>  <table class="table" data-aos="fade-left">
<thead class="thead-light">
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Procedure</th>
        <th scope="col">Branch</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
        </tr>
        </thead>
        <?php
                            if($resultChecked > 0){  
                                while($row = mysqli_fetch_assoc($result)){
                                    if("Declined" === $row['bookingStatus']){ ?>
                                  <tbody>
                                            <tr>
                                            <th scope="row"> <?php echo $row['bookingName'] ?> </th>
                                                <td> <?php echo $row['bookingGender'] ?> </td>
                                                <td> <?php echo $row['bookingDate'] ?> </td>
                                                <td> <?php echo $row['bookingTime'] ?> </td>
                                                <td> <?php echo $row['bookingConsultation'] ?> </td>
                                                <td> <?php echo $row['bookingBranch'] ?> </td>
                                                <td class="status"> 
                                                    <?php if($row['bookingStatus'] == 'Pending'): ?>
                                                        <span class="badge badge-warning">Pending Request</span>
                                                    <?php endif ?>
                                                    <?php if($row['bookingStatus'] == 'Accepted'): ?>
                                                        <span class="badge badge-primary">Confirmed</span>
                                                    <?php endif ?>
                                                    <?php if($row['bookingStatus'] == 'Declined'): ?>
                                                        <span class="badge badge-danger">Declined</span>
                                                    <?php endif ?>
                                                    <?php if($row['bookingStatus'] == 'Done'): ?>
                                                        <span class="badge badge-info">Done</span>
                                                    <?php endif ?>
                                                </td>
                                                
                                                <td> 
                                                    <form action="../includes/updatePendingData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">

                                                        <button class="btn btn-outline-danger"> Delete </button> 
                                                    </form>
                                                </td>
                                                </tbody>
                                       

                            <?php } } } ?></table>
                    </div>


                 
                </div>
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
    
    
    <?php
        if(isset($_SESSION['Accepted'])){ ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    width: '250',
                    icon: 'success',
                    title: 'Accepted!',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        <?php }
        unset($_SESSION['Accepted']);
    
        if(isset($_SESSION['Declined'])){ ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    width: '250',
                    icon: 'error',
                    title: 'Declined!',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        <?php }
        unset($_SESSION['Declined']);
    ?>

    <script>
        // For displaying the Schedule container
        const historyButton = document.getElementById("history-button");
        const pendingButton = document.getElementById("pending-button");
        const declinedButton = document.getElementById("declined-button");

        const history = document.getElementById("history");
        const pending = document.getElementById("pending");
        const declined = document.getElementById("declined");

        // History container 
        historyButton.addEventListener("click", function(){
            history.style.display = "block";
            pending.style.display = "none";
            declined.style.display = "none";
        });

        // Pending container 
        pendingButton.addEventListener("click", function(){
            pending.style.display = "block";
            history.style.display = "none";
            declined.style.display = "none";
        });

        // Declined container 
        declinedButton.addEventListener("click", function(){
            declined.style.display = "block";
            history.style.display = "none";
            pending.style.display = "none";
        });
    </script>
    
</html>