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
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />
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
      <a class="navbar-brand ps-3" href="../index.php">MCY Dental Clinic</a>
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
            id="btnNavbarSearch"
            onchange="openPage()"
          />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>

      <!-- Script for Searching Page -->
     <script>
       function openPage(){
         var x =document.getElementById("btnNavbarSearch").value;

         if(x === "pending"){
           window.open("pending_tables.html");
         }
         if(x == "declined" || "DECLINED"){
          window.open("declined_tables.html");
         }
         else if(x == "accepted" || "ACCEPTED"){
          window.open("accepted_tables.html");
         }
         else if(x == "history" || "HISTORY"){
          window.open("customer_history.html");
         }
         else if(x == "patient" || "PATIENT"){
          window.open("add_patient.html");
         }
       }
     </script>

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

                
                <i class="fas fa-home"></i>
                </div>
                Home
              </a>

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
                Appointments
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
                    >Pending Schedules</a
                  >
                  <a class="nav-link" href="accepted_tables.php"
                    >Accepted Schedules</a
                  >
                  <a class="nav-link" href="declined_tables.php"
                    >Decline Schedules</a
                  >
                  <a class="nav-link" href="declined_tables.php"
                    >Missed Schedules</a
                  >
                  <a class="nav-link" href="customer_history.php"
                    >Customer History</a
                  >
                </nav>
              </div>
              <div class="sb-sidenav-menu-heading">Users</div>
              <a class="nav-link" href="user_accounts.php">
                <div class="sb-nav-link-icon">
                <i class="fas fa-archive"></i>
                </div>
                Accounts
              </a>

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
            <h1 class="mt-4">Decline Schedule</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Decline Schedule</li>
            </ol>

            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Decline
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Branch</th>
                      <th>Consultation</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Branch</th>
                      <th>Consultation</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Karlito Junior</td>
                      <td>2021/04/25</td>
                      <td>9:00AM-1:00PM</td>
                      <td>Malinao</td>
                      <td>Fluoride Application</td>
                      <td class="text-right">
                        <button type="button" class="btn btn-secondary">
                          <i class="fas fa-check"></i> Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Lebron James</td>
                      <td>2021/05/35</td>
                      <td>9:00AM-1:00PM</td>
                      <td>Pinagbuhatan</td>
                      <td>Oral Prophylaxis</td>
                      <td class="text-right">
                        <button type="button" class="btn btn-secondary">
                          <i class="fas fa-check"></i> Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Manny Paquiao</td>
                      <td>2021/04/25</td>
                      <td>9:00AM-1:00PM</td>
                      <td>Malinao</td>
                      <td>Fluoride Application</td>
                      <td class="text-right">
                        <button type="button" class="btn btn-secondary">
                          <i class="fas fa-check"></i> Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Nikola Tesla</td>
                      <td>2021/04/25</td>
                      <td>9:00AM-1:00PM</td>
                      <td>San Joaquin</td>
                      <td>Tooth Extraction</td>
                      <td class="text-right">
                        <button type="button" class="btn btn-secondary">
                          <i class="fas fa-check"></i> Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Michael Jordan</td>
                      <td>2021/02/12</td>
                      <td>1:00PM-2:00PM</td>
                      <td>San Joaquin</td>
                      <td>Oral Prophylaxis</td>
                      <td class="text-right">
                        <button type="button" class="btn btn-secondary">
                          <i class="fas fa-check"></i> Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Jesa Belle</td>
                      <td>2021/12/35</td>
                      <td>1:00PM-3:00PM</td>
                      <td>Pinagbuhatan</td>
                      <td>Fluoride Application</td>
                      <td class="text-right">
                        <button type="button" class="btn btn-secondary">
                          <i class="fas fa-check"></i> Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Karlito Junior</td>
                      <td>2021/04/25</td>
                      <td>9:00AM-1:00PM</td>
                      <td>Malinao</td>
                      <td>Orthodontic Treatment</td>
                      <td class="text-right">
                        <button type="button" class="btn btn-secondary">
                          <i class="fas fa-check"></i> Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>John Stockton</td>
                      <td>2021/06/15</td>
                      <td>5:00AM-3:00PM</td>
                      <td>San Joaquin</td>
                      <td>Orthodontic Treatment</td>
                      <td class="text-right">
                        <button type="button" class="btn btn-secondary">
                          <i class="fas fa-check"></i> Done
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


         

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>
