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

      <!-- head -->
    <meta charset="utf-8"/>
    <meta name="referrer" content="no-referrer-when-downgrade" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../task/main.css?v=2021.4.5120" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"/>
    <script src="../task/daypilot-all.min.js?v=2021.4.5120"></script>

    <!-- /head -->
  </head>
  <body class="sb-nav-fixed">
  <?php include "includes/navbar.php"; ?> <!--==== NAV BAR ====-->

      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Task Management</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Task Management</li>
            </ol>
            
          <label for="basic-url" class="form-label">Monthly Task</label>


<!-- START -->          
<div id="dp"></div>

          <script type="text/javascript">
        var dp = new DayPilot.Month("dp");

        // behavior and appearance
        dp.cellMarginBottom = 20;

        dp.bubble = new DayPilot.Bubble({
            onLoad: function (args) {
                var ev = args.source;
                args.html = "testing bubble for: " + ev.text();
            }
        });
        dp.eventHoverHandling = "Disabled";

        // view
        dp.startDate = new DayPilot.Date();  // or just dp.startDate = "2013-03-25";

        

        // event moving
        dp.onEventMoved = function (args) {
            dp.message("Moved: " + args.e.text());
        };

        // event resizing
        dp.onEventResized = function (args) {
            dp.message("Resized: " + args.e.text());
        };

        // event creating
        dp.onTimeRangeSelected = function (args) {
            var name = prompt("New event name:", "Event");
            dp.clearSelection();
            if (!name) return;
            var e = new DayPilot.Event({
                start: args.start,
                end: args.end,
                id: DayPilot.guid(),
                text: name
            });
            dp.events.add(e);
            dp.message("Created");
        };

        dp.eventDeleteHandling = "Update";

        dp.onEventDeleted = function (args) {
            dp.message("Event deleted: " + args.e.text());
        };
        
        dp.onEventClicked = function (args) {
            alert("clicked: " + args.e.id());
        };

        dp.onBeforeCellRender = function (args) {
            if (args.cell.start.getTime() === new DayPilot.Date().getDatePart().getTime()) {
                args.cell.backColor = "#ac0";
            }
        };

        dp.init();


    </script>

    <!-- bottom -->
</template>

<script src="../task/app.js?v=2021.4.5120"></script>

<!-- /bottom -->

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
