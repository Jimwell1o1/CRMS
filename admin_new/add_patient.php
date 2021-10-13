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
    <title>Add Patient - Admin</title>
    <?php
        include 'includes/style-links.php';
    ?> 
  </head>
  <body class="sb-nav-fixed">
  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->

      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Add Patient</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Add Patient</li>
            </ol>
            
          <label for="basic-url" class="form-label">General Information</label>

          
          <div class="row">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Patient Name</span>
              <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Gender</span>
              <select class="form-select" aria-label="Default select example">
              <option selected>Select Gender</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
            </div>
          </div>
            
            

            <label for="basic-url" class="form-label">Schedule Information</label>


            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Schedule Date</span>
              <input type="date" class="form-control">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Schedule Time</span>
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

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Dental Clinic</span>
              <select class="form-select">
                <option selected>Choose...</option>
                <option>Malinao</option>
                <option>San Joaquin</option>
                <option>Pinagbutan</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Procedure/Dental Service</span>
              <select class="form-select">
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


  
            

            <div class="col-auto">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
            
                  


        </main>
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
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
