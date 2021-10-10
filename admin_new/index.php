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
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">


              <!-- <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                  <div class="card-body">Customer History</div>
                  <div
                    class="
                      card-footer
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- Customer History -->
              <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card border-left-primary shadow h-100 py-2 bg-primary">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                  Customer History</div>
                                <div class="h4 mb-0 font-weight-bold text-white">30</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-history fa-2x text-gray-300 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

               <!-- Pending -->
               <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card border-left-primary shadow h-100 py-2 bg-secondary">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                    Pending Schedule</div>
                                <div class="h4 mb-0 font-weight-bold text-white">21</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <!-- <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                  <div class="card-body">Pending Customers</div>
                  <div
                    class="
                      card-footer
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- Accepted -->
              <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card border-left-primary shadow h-100 py-2 bg-success">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                    Accepted Schedule</div>
                                <div class="h4 mb-0 font-weight-bold text-white">39</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check-circle fa-2x text-gray-300 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <!-- <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                  <div class="card-body">Accepted Customers</div>
                  <div
                    class="
                      card-footer
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- Decline -->
              <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card border-left-primary shadow h-100 py-2 bg-danger">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase text-white mb-1">
                                    Decline Schedule</div>
                                <div class="h4 mb-0 font-weight-bold text-white">41</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-ban fa-2x text-gray-300 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <!-- <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                  <div class="card-body">Decline Customers</div>
                  <div
                    class="
                      card-footer
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="row">
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Area Chart Example
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="40"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                  </div>
                  <div class="card-body">
                    <canvas id="myBarChart" width="100%" height="40"></canvas>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
                        </button>
                      </td>
                    </tr>
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
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>