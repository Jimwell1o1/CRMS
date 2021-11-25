<?php
 session_start();
 require_once '../../includes/dbh.inc.php';
 require_once '../../includes/emptySession.php';

 if (!isset($_SESSION['admin_branchName'])){
  header("Location: ../../admin/login-admin.php");
  die();
}
 
if($_SESSION['admin_branchName'] == "Pinagbuhatan" || $_SESSION['admin_branchName'] == "Malinao" || $_SESSION['admin_branchName'] == "San Joaquin"){
  include '../includes/dashboardCount1.php';

}
elseif($_SESSION['admin_branchName'] == "mainAdmin"){
  include '../includes/dashboardCount2.php';

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
    
  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <title>Dashboard- MCY Admin</title>
    <?php
        include 'style-links.php';
    ?>
    
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <script>function display_ct7() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
hours=hours.toString().length==1? 0+hours.toString() : hours;

var minutes=x.getMinutes().toString()
minutes=minutes.length==1 ? 0+minutes : minutes;

var seconds=x.getSeconds().toString()
seconds=seconds.length==1 ? 0+seconds : seconds;

var month=(x.getMonth() +1).toString();
month=month.length==1 ? 0+month : month;

var dt=x.getDate().toString();
dt=dt.length==1 ? 0+dt : dt;

var x1= ""; 
x1 = x1 +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
document.getElementById('ct7').innerHTML = x1;
display_c7();
 }
 function display_c7(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)
}
display_c7()
</script>

  </head>
  <body class="sb-nav-fixed">

  <?php include "../includes/navbar_light.php"; ?> <!--==== NAV BAR ====-->
  
      <div id="layoutSidenav_content">
        <main>
        
          <div class="container-fluid px-4" >
              
         
            <h1 class="mt-4">Dashboard - <?php echo $_SESSION['admin_branchName']; ?> </h1>
          
            <ol class="breadcrumb mb-4 ">&nbsp;&nbsp;
              <li class="breadcrumb-item active"> 
                <b>
              <?php
         date_default_timezone_set('Asia/Manila');
         echo "Date: ".date("M j, Y"."(l)");
        
         echo "<br> Time: <span  id='ct7'></span>";
        
    
              ?>
              </b>
              
 
            
       
          </li>
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
                                  //  echo $done;
                                  echo $history;
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
              <!-- Decline -->
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
      <p>
              <!--   Today's total appointment -->
              <!-- <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card border-left-primary shadow h-55 bg-info">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                  Today's total appointment</div>
                                <div class="h4 mb-0 font-weight-bold text-white">
                                  <?php
                                   echo $done;
                                    ?>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar-day fa-2x text-gray-300 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

               <!-- Last 7 days total Appointments -->
              <!-- <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card border-left-primary shadow h-55 bg-success">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                  Last 7 days total appointment</div>
                                <div class="h4 mb-0 font-weight-bold text-white">
                                  <?php
                                   echo $done;
                                    ?>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar-week fa-2x text-gray-300 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Total Appointment this Month -->
            <!-- <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card border-left-primary shadow h-55 bg-warning">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                  Total appointment this Month</div>
                                <div class="h4 mb-0 font-weight-bold text-white">
                                  <?php
                                   echo $pending;
                                    ?>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar-plus fa-2x text-gray-300 text-white "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Total Register -->
            <!-- <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card border-left-primary shadow h-55 bg-primary">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                  Total Registered Patients</div>
                                <div class="h4 mb-0 font-weight-bold text-white">
                                  <?php
                                   echo $usercount;
                                    ?>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-plus fa-2x text-gray-300 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
      </p>             
            <div class="row">
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Schedule Status
                  </div>
                  <div class="card-body">         
                  <canvas id="myPieChart" width="100%" height="40"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Monthly Appointment ( <?php echo $year; ?>)
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="40"></canvas>
                   

                    
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
                      <th>Email</th>
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
                    <th>Email</th>
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
                                      if($_SESSION['admin_branchName'] === $row['bookingBranch']){
                                        include '../includes/tables/pending_tables.inc.php';
                                        
                                        } 
                                if($_SESSION['admin_branchName'] === "mainAdmin"){
                                        include '../includes/tables/pending_tables.inc.php';
                                  
                          } } } } ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>

      <?php 
          include 'modalAddpatient.php';

          ?>


        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; MCY Dental Clinic 2021</div>
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
    ></script>
    <script src="../js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
   
    
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>
    <script src="../js/datatables-simple-demo.js"></script>


             <script>
              
                  var ctx = document.getElementById("myPieChart");
                  var myPieChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                      labels: [ "Decline", "Pending", "Accepted"],
                      datasets: [{
                        data: [  <?php echo $decline; ?>, <?php echo $pending; ?>,<?php echo $accepted; ?>],
                        backgroundColor: ['#dc3545', '#ffc107', '#28a745'],
                      }],
                    
                    },

                    

                  });
                 </script>


<script>
                    var ctx = document.getElementById("myAreaChart");
                  
                    var myLineChart = new Chart(ctx, {
                      type: 'line',
                      data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                      label: "Appointment",
                      lineTension: 0.3,
                      backgroundColor: "rgba(2,117,216,0.2)",
                      borderColor: "rgba(2,117,216,1)",
                      pointRadius: 5,
                      pointBackgroundColor: "rgba(2,117,216,1)",
                      pointBorderColor: "rgba(255,255,255,0.8)",
                      pointHoverRadius: 5,
                      pointHoverBackgroundColor: "rgba(2,117,216,1)",
                      pointHitRadius: 50,
                      pointBorderWidth: 2,
                      data: [<?php echo $tjan; ?>, <?php echo $tfeb; ?>, <?php echo $tmar; ?>, <?php echo $tapr; ?>
                      , <?php echo $tmay; ?>, <?php echo $tjun; ?>
                      , <?php echo $tjul; ?>,<?php echo $taug; ?>,
                      <?php echo $tsep; ?>, <?php echo $toct; ?>, <?php echo $tnov; ?>
                      , <?php echo $tdec; ?>],
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
                        
                      }],
                      yAxes: [{
                        ticks: {
                          min: 0,
                          maxTicksLimit: 8
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


  </body>
  </body>
</html>