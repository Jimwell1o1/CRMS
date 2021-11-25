<!--========= NAV BAR =========-->
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.php">MCY Dental Clinic</a>
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
        
          <button class="btn btn-primary" id="btnNavbarSearch">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>

      <!-- Script for Searching Page -->
      <script>
       function openPage(){
        var x = document.getElementById("btnNavbarSearch").value


         if(x === "pending" || x == "PENDING"){
          window.open("pending_tables.php","_self") + document.getElementById('btnNavbarSearch').value;
        }
         if(x == "declined" || x =="DECLINED"){
          window.open("declined_tables.php","_self") + document.getElementById('btnNavbarSearch').value;
         }
     
          if(x == "accepted" || x =="ACCEPTED"){
          window.open("accepted_tables.php","_self") + document.getElementById('btnNavbarSearch').value;
         }
          if(x == "history" || x == "HISTORY"){
          window.open("customer_history.php","_self") + document.getElementById('btnNavbarSearch').value;
         }
         if(x == "email" || x =="EMAIL" || x =="send" || x =="send email"){
          window.open("email_sender.php","_self") + document.getElementById('btnNavbarSearch').value;
         }
         if(x == "events" || x =="EVENTS" || x =="create events" || x =="create"){
          window.open("task.php","_self") + document.getElementById('btnNavbarSearch').value;
         }
        if(x == "user" || x =="USER" || x =="user accounts" || x =="accounts"){
          window.open("user_accounts.php","_self") + document.getElementById('btnNavbarSearch').value;
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
            <li><a class="dropdown-item" href="light/index-light.php">Light Dashboard</a></li>
            <li><a class="dropdown-item" onClick="window.print()">Print Report</a></li>
            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="../includes/logout-admin.inc.php">Logout</a></li>
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
                    >Declined Schedules</a
                  >
                
                  <a class="nav-link" href="customer_history.php"
                    >Customer History</a
                  >
                </nav>
              </div>
              <div class="sb-sidenav-menu-heading">Accounts</div>
              <a class="nav-link" href="user_accounts.php">
                <div class="sb-nav-link-icon">
                <i class="fas fa-archive"></i>
                </div>
                User
              </a>

              <?php
                if($_SESSION['admin_branchName'] === "mainAdmin"){

              echo '<a class="nav-link" href="admin_accounts.php">
              <div class="sb-nav-link-icon">
              <i class="fas fa-archive"></i>
              </div>
              Admin 
              </a>';

              }; ?>




              <div class="sb-sidenav-menu-heading">Tasks</div>
              

            

              <a class="nav-link" href="email_sender.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-envelope"></i>
                </div>
                Send Email
              </a>

              <a class="nav-link" href="task.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tasks"></i>
                </div>
                Create Events
              </a>

              <a>
              <button type="button" class="btn btn-dark"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-plus-circle" style = "color:#595C5F;"></i> Add Appointment
              </button>
               </a>

              <a class="nav-link" href="../includes/logout-admin.inc.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-sign-out-alt"></i>
                </div>
                Log out
              </a>
              

              
          <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin - <?php
                echo $_SESSION["admin_branchName"];
            ?>

          </div>
          
        </nav>
      </div>


      <!--========= END OF NAV BAR =========-->