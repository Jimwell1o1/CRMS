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
    <title>Dashboard- MCY Admin</title>
    <?php
        include 'includes/style-links.php';
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

  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->
  
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
                                              <form action="../includes/updatePendingData_index.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
                                              <div class = "d-flex p-1">
                                                  <button type="button" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#update_modal">
                                                    <i class="fas fa-edit"></i>
                                                    </button>
                                                    <label>&nbsp;</label>
                                                    <button class="btn btn-warning" id="accept-button" name="submit">
                                                      <i class="fas fa-check"></i>
                                                    </button>
                                                    <label>&nbsp;</label>
                                                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">
                                                      <i class="fas fa-trash"></i>
                                                    </button>
                                                    <label>&nbsp;</label>
                                                    <button class="btn btn-primary" onClick="this.disabled=true; this.value='Sending…';">
                                                      <i class="fas fa-bell"></i>
                                                    </button>
                                                    <div>
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
          

        <?php 
          include 'modalAddpatient.php';

          ?>


<!-- Modal -->
<div class="modal fade" id="update_modal" tabindex="-1" aria-labelledby="update_modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_modalLabel">Update Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <div>
          <label class="form-label">Patient Name:</label>
          <input name="name" type="text"  class="form-control" placeholder="Enter Patient Name" required>
        </div>
        
        <div>
          <label class="form-label">Email:</label>
          <input name="name" type="text" class="form-control" placeholder="xxxxx@gmail.com" required>
        </div>

        <div>
          <label class="form-label">Gender:</label>
          <input name="gender" type="text" class="form-control" placeholder="Male/Female" required>
        </div>
        <div class = "row">
        <div class = "col">
          <label class="form-label">Appointment Date:</label>
          <input name="date" type="text" class="form-control" placeholder="YYYY/MM/DD" required>
        </div>
       
        <div  class = "col">
          <label class="form-label">Time:</label>
          <input name="time" type="text" class="form-control" placeholder="00:000AM/PM" required>
        </div>
        </div>
        <div>
          <label class="form-label">Dental Clinic:</label>
          <input name="branch" type="text" class="form-control" placeholder="Enter Clinic" required>
        </div>
        <div>
          <label class="form-label">Procedure/Dental Service</label>
          <input name="procedure" type="text" class="form-control" placeholder="Enter Procedure" required>
        </div>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button  type="submit" name="confirm-submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>



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
                      label: "Sessions",
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
                      data: [<?php echo $decline; ?>, <?php echo $pending; ?>, <?php echo $accepted; ?>, <?php echo $accepted; ?>
                      , <?php echo $decline; ?>, <?php echo $pending; ?>
                      , <?php echo $decline; ?>,<?php echo $pending; ?>,
                      <?php echo $pending; ?>, <?php echo $bookCount; ?>, <?php echo $accepted; ?>
                      , <?php echo $decline; ?>],
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