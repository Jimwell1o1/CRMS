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
    <title>Charts - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="sb-nav-fixed">
    <!--========= NAV BAR =========-->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.html">MCY Dental Clinic</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <form
        class="
          d-none d-md-inline-block
          form-inline
          ms-auto
          me-0 me-md-3
          my-2 my-md-0
        "
      >
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Search for..."
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
          />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>

      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
            <li><a class="dropdown-item" href="#!">Settings</a></li>
            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#!">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">General</div>
              <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
              </a>
              <div class="sb-sidenav-menu-heading">Function</div>

              <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSched"
                aria-expanded="false"
                aria-controls="collapseSched"
              >
                <div class="sb-nav-link-icon">
                  <i class="fas fa-columns"></i>
                </div>
                Schedule
                <div class="sb-sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              <div
                class="collapse"
                id="collapseSched"
                aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion"
              >
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="pending_tables.php"
                    >Pending Schedule</a
                  >
                  <a class="nav-link" href="accepted_tables.php"
                    >Accepted Schedule</a
                  >
                  <a class="nav-link" href="declined_tables.php"
                    >Decline Schedule</a
                  >
                  <a class="nav-link" href="customer_history.php"
                    >Customer History</a
                  >
                </nav>
              </div>

              <a class="nav-link" href="add_patient.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-plus-circle"></i>
                </div>
                Add Patient
              </a>

             
          <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Administrator
          </div>
        </nav>
      </div>

      <!--========= END OF NAV BAR =========-->
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
            

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Patient Name</span>
              <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
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
