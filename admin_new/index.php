<?php
 session_start();
 require_once '../includes/dbh.inc.php';
 require_once '../includes/emptySession.php';

 if (!isset($_SESSION['admin_branchName'])){
  header("Location: ../admin/login-admin.php");
  die();
}
 
if($_SESSION['admin_branchName'] == "Pinagbuhatan" || $_SESSION['admin_branchName'] == "Malinao" || $_SESSION['admin_branchName'] == "San Joaquin"){
  include 'includes/dashboardCount1.php';

}
elseif($_SESSION['admin_branchName'] == "mainAdmin"){
  include 'includes/dashboardCount2.php';

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MCY Admin</title>
    
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

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

    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Schedule', 'Appointment per Schedule'],
          ['Pending',     <?php 
                                  echo $pending; 
                                ?>],
          ['Decline',      <?php 
                                  echo $decline; 
                                ?>],
          ['Accepted', <?php 
                                  echo $accepted; 
                                ?>],
        ]);

        var options = {
          title: 'Schedule Percentage'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 

 


  </head>
  <body class="sb-nav-fixed">

  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->
  
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard - <?php echo $_SESSION['admin_branchName']; ?> </h1>
            <ol class="breadcrumb mb-4">&nbsp;&nbsp;
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">



              <!-- Customer History -->
              <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card border-left-primary shadow h-55 bg-primary">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                  Customer History</div>
                                <div class="h4 mb-0 font-weight-bold text-white">
                                  <?php
                                   echo $done;
                                    ?>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-history fa-2x text-gray-300 text-white"></i>
                            </div>
                            <div class="
                              card-footer
                              d-flex
                              align-items-center
                              justify-content-between
                              ">
                              <a class="small text-white" href="customer_history.php"> View Schedule</a>
                              <div class="small text-white">
                              <i class="fas fa-angle-right"></i>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

               <!-- Pending -->
               <div class="col-xl-3 col-md-6 mb-4 ">
               <div class="card border-left-primary shadow h-55 bg-warning">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                    Pending Schedule</div>
                                    <div class="h4 mb-0 font-weight-bold text-white">
                                <?php 
                                  echo $pending; 
                                ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300 text-white"></i>
                            </div>
                            <div class="
                              card-footer
                              d-flex
                              align-items-center
                              justify-content-between
                              ">
                              <a class="small text-white" href="pending_tables.php">View Schedule</a>
                              <div class="small text-white">
                              <i class="fas fa-angle-right"></i>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
              <!-- Accepted -->
              <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card border-left-primary shadow h-55 bg-success">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                    Accepted Schedule</div>
                                    <div class="h4 mb-0 font-weight-bold text-white">
                                <?php 
                                  echo $accepted; 
                                ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check-circle fa-2x text-gray-300 text-white"></i>
                            </div>
                            <div class="
                              card-footer
                              d-flex
                              align-items-center
                              justify-content-between
                              ">
                              <a class="small text-white" href="accepted_tables.php">View Schedule</a>
                              <div class="small text-white">
                              <i class="fas fa-angle-right"></i>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card border-left-primary shadow h-55  bg-danger">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                    Decline Schedule</div>
                                    <div class="h4 mb-0 font-weight-bold text-white">
                                <?php 
                                  echo $decline; 
                                ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-ban fa-2x text-gray-300 text-white"></i>
                            </div>
                            
                            <div class="
                              card-footer
                              d-flex
                              align-items-center
                              justify-content-between
                              ">
                              <a class="small text-white" href="declined_tables.php">View Details</a>
                              <div class="small text-white">
                              <i class="fas fa-angle-right"></i>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

              
            <div class="row">
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    SCHDULE PERCENTAGE
                  </div>
                  <div class="card-body">
                 
                  <canvas id="myPieChart" width="100%" height="40"></canvas>
                  
                  <script>
                      var ctx = document.getElementById("myPieChart");
                  var myPieChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                      labels: [ "Decline", "Pending", "Accepted"],
                      datasets: [{
                        data: [  <?php echo $decline; ?>, <?php echo $pending; ?>,<?php echo $accepted; ?>],
                        backgroundColor: ['#dc3545', '#ffc107', '#28a745'],
                      }],
                    },
                  });
                 </script>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    MONTHLY APPOINTMENT
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="40"></canvas>
                    <script>
                    var ctx = document.getElementById("myAreaChart");
                    var myLineChart = new Chart(ctx, {
                      type: 'line',
                      data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                      label: "Sessions",
                      lineTension: 0.3,
                      backgroundColor: "rgba(2,117,216,0.2)",
                      borderColor: "rgba(240, 255, 0, 1)",
                      pointRadius: 5,
                      pointBackgroundColor: "rgb(255, 0, 0)",
                      pointBorderColor: "rgb(255, 0, 0)",
                      pointHoverRadius: 5,
                      pointHoverBackgroundColor: "rgba(2,117,216,1)",
                      pointHitRadius: 50,
                      pointBorderWidth: 2,
                      data: [52, 12, 32, 88, 13, 65, 24,59, 25, 41, 51, 34],
                    }],
                  },
                  options: {
                    scales: {
                      xAxes: [{
                        time: {
                          unit: 'date'
                        },
                        gridLines: {
                          display: false
                        },
                        ticks: {
                          maxTicksLimit: 7
                        }
                      }],
                      yAxes: [{
                        ticks: {
                          min: 0,
                          max: 100,
                          maxTicksLimit: 5
                        },
                        gridLines: {
                          color: "rgba(0, 0, 0, .125)",
                        }
                      }],
                    },
                    legend: {
                      display: false
                    }
                  }
                });
                    </script>

                    
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Pending Customer
              </div>
              <div class="card-body">
                   <table id="datatablesSimple">
                  <thead>
                    <tr>
                    <th>Name</th>
                      <th>Gender</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Consultation</th>
                      <th>Branch</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Name</th>
                    <th>Gender</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Consultation</th>
                      <th>Branch</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    

                    <?php
                            $sql = "SELECT * FROM booking;";
                            $result = mysqli_query($conn, $sql);
                            $resultChecked = mysqli_num_rows($result);

                            if($resultChecked > 0){  
                                while($row = mysqli_fetch_assoc($result)){
                                    if("Pending" === $row['bookingStatus']){ 
                                      if($_SESSION['admin_branchName'] === $row['bookingBranch']){ ?>
                                     
                                          

                                            <tr>
                                              <th scope="row"> <?php echo $row['bookingName'] ?> </th>
                                              <td> <?php echo $row['bookingGender'] ?> </td>
                                                <td> <?php echo $row['bookingDate'] ?> </td>
                                                <td> <?php echo $row['bookingTime'] ?> </td>
                                                <td> <?php echo $row['bookingConsultation'] ?> </td>
                                                <td> <?php echo $row['bookingBranch'] ?> </td>
                                                <!-- <td class="status"> 
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
                                                </td> -->



                                              <td class="text-left">
                                              <form action="../includes/updatePendingData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
                                                        <!-- <button class="btn btn-outline-primary"id="accept-button" name="submit"> Update </button> 
                                                        <button class="btn btn-outline-danger"> Delete </button>  -->

                                                        <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                  <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-warning" id="accept-button" name="submit">
                                                  <i class="fas fa-check"></i>
                                                </button>
                                                <button class="btn btn-danger">
                                                  <i class="fas fa-trash"></i>
                                                </button>
                                                    </form>

                                          
                                              </td>
                                            </tr>
                                            <?php } 
                                if($_SESSION['admin_branchName'] === "mainAdmin"){
                                  ?>
                                  <tr>
                                              <th scope="row"> <?php echo $row['bookingName'] ?> </th>
                                              <td> <?php echo $row['bookingGender'] ?> </td>
                                                <td> <?php echo $row['bookingDate'] ?> </td>
                                                <td> <?php echo $row['bookingTime'] ?> </td>
                                                <td> <?php echo $row['bookingBranch'] ?> </td>
                                                <td> <?php echo $row['bookingConsultation'] ?> </td>
                                                <td class="text-left">
                                                    <form action="../includes/updateAcceptedData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
                                                        <!-- <button class="btn btn-outline-primary"id="accept-button" name="submit"> Update </button> -->
                                                        <button class="btn btn-warning" id="accept-button" name="submit">
                                                          <i class="fas fa-check"></i> Done
                                                        </button> 
                                                        <button class="btn btn-danger">
                                                          <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form> 
                                              </td>
                                            </tr>
                          <?php
                          } } } } ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Patient</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <label class="form-label">Name</label>
          <input type="text" class="form-control">
        </div>
        <div>
          <label class="form-label">Date</label>
          <input type="date" class="form-control">
        </div>
        <div>
          <label class="form-label">Time</label>
          <select class="form-select">
            <option selected>Select Time...</option>
            <option>8:00 A.M</option>
            <option>9:00 A.M</option>
            <option>10:00 A.M</option>
            <option>11:00 A.M</option>
            <option>12:00 P.M</option>
            <option>1:00 P.M</option>
            <option>2:00 P.M</option>
            <option>3:00 P.M</option>
            <option>4:00 P.M</option>
            <option>5:00 P.M</option>
          </select>
        </div>
        <div>
          <label class="form-label">Dental Clinic</label>
          <select class="form-select">
            <option selected>Choose...</option>
            <option>Malinao</option>
            <option>San Joaquin</option>
            <option>Pinagbutan</option>
          </select>
        </div>
        <div>
          <label class="form-label">Procedure/Dental Service</label>
          <select id="inputState" class="form-select">
            <option selected>Select Procedure...</option>
            <option value="">Oral Prophylaxis</option>
            <option value="">Tooth Restoration</option>
            <option value="">Tooth Extraction</option>
            <option value="">Fluoride Application</option>
            <option value="">Prosthodontic Treatment</option>
            <option value="">Orthodontic Treatment</option>
            <option value="">Periodontic Rehab</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; Your Website 2021</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></s>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
   
    
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>


   

  </body>
</html>