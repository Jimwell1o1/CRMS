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
  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Customer History</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Customer History</li>
            </ol>

            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                History
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
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Branch</th>
                      <th>Consultation</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Karlito Junior</td>
                      <td>2021/04/25</td>
                      <td>9:00AM-1:00PM</td>
                      <td>Malinao</td>
                      <td>Fluoride Application</td>
                    </tr>
                    <tr>
                      <td>Lebron James</td>
                      <td>2021/05/35</td>
                      <td>9:00AM-1:00PM</td>
                      <td>Pinagbuhatan</td>
                      <td>Oral Prophylaxis</td>
                    </tr>
                    <tr>
                      <td>Manny Paquiao</td>
                      <td>2021/04/25</td>
                      <td>9:00AM-1:00PM</td>
                      <td>Malinao</td>
                      <td>Fluoride Application</td>
                    </tr>
                    <tr>
                      <td>Nikola Tesla</td>
                      <td>2021/04/25</td>
                      <td>9:00AM-1:00PM</td>
                      <td>San Joaquin</td>
                      <td>Tooth Extraction</td>
                    </tr>
                    <tr>
                      <td>Michael Jordan</td>
                      <td>2021/02/12</td>
                      <td>1:00PM-2:00PM</td>
                      <td>San Joaquin</td>
                      <td>Oral Prophylaxis</td>
                    </tr>
                    <tr>
                      <td>Jesa Belle</td>
                      <td>2021/12/35</td>
                      <td>1:00PM-3:00PM</td>
                      <td>Pinagbuhatan</td>
                      <td>Fluoride Application</td>
                    </tr>
                    <tr>
                      <td>Karlito Junior</td>
                      <td>2021/04/25</td>
                      <td>9:00AM-1:00PM</td>
                      <td>Malinao</td>
                      <td>Orthodontic Treatment</td>
                    </tr>
                    <tr>
                      <td>John Stockton</td>
                      <td>2021/06/15</td>
                      <td>5:00AM-3:00PM</td>
                      <td>San Joaquin</td>
                      <td>Orthodontic Treatment</td>
                    </tr>
                  </tbody>
                </table>
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
