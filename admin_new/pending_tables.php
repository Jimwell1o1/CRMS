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
                                      if($_SESSION['admin_branchName'] === $row['bookingBranch']){ ?>       

                                            <tr>
                                            <!-- <th scope="row"> <?php // echo $row['bookingId'] ?> </th> -->
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
                                                       
                                                <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                  <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-warning" id="accept-button" name="submit">
                                                  <i class="fas fa-check"></i>
                                                </button>
                                                <button class="btn btn-danger" onclick="ConfirmDelete()">
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
                                                <form action="../includes/updatePendingData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
                                                  

                                                <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                  <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-warning" id="accept-button" name="submit">
                                                  <i class="fas fa-check"></i>
                                                </button>
                                                <button class="btn btn-danger" onclick="ConfirmDelete()">
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
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>

    
    <script type="text/javascript">

    <script>
      function ConfirmDelete(){
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
    }
    </script>
  </body>
</html>
