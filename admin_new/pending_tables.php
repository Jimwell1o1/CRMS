<?php
    session_start();
    require_once '../includes/dbh.inc.php';
    require_once '../includes/emptySession.php';

 if (!isset($_SESSION['admin_branchName'])){
  header("Location: ../admin/login-admin.php");
  die();
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
    <title>Tables - SB Admin</title>
    <?php
        include 'includes/style-links.php';
    ?>
  </head>
  <body class="sb-nav-fixed">
    
  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->

      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Pending Schedule</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">&nbsp;&nbsp;
                <a href="index.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Pending Schedule</li>
            </ol>

            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Pending
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <!-- <th>Booking ID</th> -->
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
                    <!-- <th>Booking ID</th> -->
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
                                      if($_SESSION['admin_branchName'] === $row['bookingBranch']){
                                        include 'includes/tables/pending_tables.inc.php';
                                        
                                        } 
                                if($_SESSION['admin_branchName'] === "mainAdmin"){
                                        include 'includes/tables/pending_tables.inc.php';
                                  
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
          <input name="name" type="text" class="form-control" placeholder="Enter Patient Name" required>
        </div>
        <div>
          <label class="form-label">Gender:</label>
          <input name="gender" type="text" class="form-control" placeholder="Enter Patient Name" required>
        </div>
        <div>
          <label class="form-label">Appointment Date:</label>
          <input name="date" type="text" class="form-control" placeholder="YYYY/MM/DD" required>
        </div>
        <div>
          <label class="form-label">Time:</label>
          <input name="time" type="text" class="form-control" placeholder="00:000AM/PM" required>
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
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>

    
    <script>
    function ConfirmDelete(){
    var x = confirm("Are you sure you want to delete?");
    if (x)
        return true;
    else
      return false;
      }
</script>

   
</html>
