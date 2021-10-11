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
  </head>
  <body class="sb-nav-fixed">

  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->
  
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">



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

              <div class="col-xl-3 col-md-6">
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
              </div>

                 <div class="col-xl-3 col-md-6">
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
              </div>


              <div class="col-xl-3 col-md-6">
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
              </div>

              <!-- Decline -->
              <div class="col-xl-3 col-md-6">
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
            </div>


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